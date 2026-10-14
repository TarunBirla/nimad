<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ProjectRequest;
use App\Models\Blog;
use App\Models\Visitor;
use App\Models\VisitorPageview;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'contacts' => Schema::hasTable('contacts') ? Contact::count() : 0,
            'contacts_unread' => Schema::hasTable('contacts') ? Contact::where('status', 'unread')->count() : 0,
            'projects' => Schema::hasTable('project_requests') ? ProjectRequest::count() : 0,
            'projects_unread' => Schema::hasTable('project_requests') ? ProjectRequest::where('status', 'unread')->count() : 0,
            'blogs' => Schema::hasTable('blogs') ? Blog::count() : 0,
            'unique_visitors' => Schema::hasTable('visitors') ? Visitor::count() : 0,
            'total_visits' => Schema::hasTable('visitors') ? Visitor::sum('total_visits') : 0,
            'total_pageviews' => Schema::hasTable('visitor_pageviews') ? VisitorPageview::count() : 0,
        ];

        $recentContacts = Schema::hasTable('contacts') ? Contact::orderBy('created_at', 'desc')->take(5)->get() : collect();
        $recentProjects = Schema::hasTable('project_requests') ? ProjectRequest::orderBy('created_at', 'desc')->take(5)->get() : collect();
        $recentVisitors = Schema::hasTable('visitors') ? Visitor::with(['pageviews' => fn($q) => $q->take(5)])->orderBy('last_visited_at', 'desc')->take(8)->get() : collect();

        // Chart data for last 7 days
        $chartDates = [];
        $chartVisits = [];
        $chartViews = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = now()->subDays($i)->format('Y-m-d');
            $chartDates[] = now()->subDays($i)->format('M d');

            if (Schema::hasTable('visitors')) {
                $visits = Visitor::whereDate('last_visited_at', $date)->count();
                $chartVisits[] = $visits;
            } else {
                $chartVisits[] = 0;
            }

            if (Schema::hasTable('visitor_pageviews')) {
                $views = VisitorPageview::whereDate('created_at', $date)->count();
                $chartViews[] = $views;
            } else {
                $chartViews[] = 0;
            }
        }

        return view('admin.dashboard', compact('stats', 'recentContacts', 'recentProjects', 'recentVisitors', 'chartDates', 'chartVisits', 'chartViews'));
    }

    public function contacts(Request $request)
    {
        $status = $request->query('status');
        $query = Schema::hasTable('contacts') ? Contact::orderBy('created_at', 'desc') : null;

        if ($query && $status) {
            $query->where('status', $status);
        }

        $contacts = $query ? $query->paginate(10) : collect();
        return view('admin.contacts', compact('contacts', 'status'));
    }

    public function updateContactStatus(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->status = $request->input('status', 'read');
        $contact->save();

        return back()->with('success', 'Contact status updated.');
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return back()->with('success', 'Contact lead deleted successfully.');
    }

    public function projects(Request $request)
    {
        $status = $request->query('status');
        $query = Schema::hasTable('project_requests') ? ProjectRequest::orderBy('created_at', 'desc') : null;

        if ($query && $status) {
            $query->where('status', $status);
        }

        $projects = $query ? $query->paginate(10) : collect();
        return view('admin.projects', compact('projects', 'status'));
    }

    public function updateProjectStatus(Request $request, $id)
    {
        $project = ProjectRequest::findOrFail($id);
        $project->status = $request->input('status', 'contacted');
        $project->save();

        return back()->with('success', 'Project status updated.');
    }

    public function deleteProject($id)
    {
        $project = ProjectRequest::findOrFail($id);
        $project->delete();

        return back()->with('success', 'Project brief deleted successfully.');
    }

    public function analytics(Request $request)
    {
        $visitors = Schema::hasTable('visitors')
            ? Visitor::with('pageviews')->orderBy('last_visited_at', 'desc')->paginate(10)
            : collect();

        $topPages = Schema::hasTable('visitor_pageviews')
            ? VisitorPageview::select('page_url', 'page_title', DB::raw('count(*) as total'))
                ->groupBy('page_url', 'page_title')
                ->orderBy('total', 'desc')
                ->take(10)
                ->get()
            : collect();

        // 14 day chart data
        $chartDates = [];
        $chartVisits = [];
        $chartViews = [];

        for ($i = 13; $i >= 0; $i--) {
            $date = now()->subDays($i)->format('Y-m-d');
            $chartDates[] = now()->subDays($i)->format('M d');

            if (Schema::hasTable('visitors')) {
                $chartVisits[] = Visitor::whereDate('last_visited_at', $date)->count();
            } else {
                $chartVisits[] = 0;
            }

            if (Schema::hasTable('visitor_pageviews')) {
                $chartViews[] = VisitorPageview::whereDate('created_at', $date)->count();
            } else {
                $chartViews[] = 0;
            }
        }

        $totalUnique = Schema::hasTable('visitors') ? Visitor::count() : 0;
        $totalVisits = Schema::hasTable('visitors') ? Visitor::sum('total_visits') : 0;
        $totalPageviews = Schema::hasTable('visitor_pageviews') ? VisitorPageview::count() : 0;

        return view('admin.analytics', compact('visitors', 'topPages', 'chartDates', 'chartVisits', 'chartViews', 'totalUnique', 'totalVisits', 'totalPageviews'));
    }
}
