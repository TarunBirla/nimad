<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Blog;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create or update Default Admin
        User::updateOrCreate(
            ['email' => 'info@nimadtech.in'],
            [
                'name' => 'Nimad Tech Admin',
                'password' => Hash::make('Birlahariom11@123#$'),
                'email_verified_at' => now(),
            ]
        );

        // 2. Seed Initial Blogs with rich images
        $blogs = [
            [
                'title' => 'Website performance and Core Web Vitals: the basics',
                'slug' => 'website-performance-and-core-web-vitals-basics',
                'category' => 'Web',
                'image' => 'assets/img/blogs/website-performance-core-web-vitals.svg',
                'excerpt' => 'What Core Web Vitals measure and the practical changes that usually make a website faster.',
                'content' => '<p>Page speed directly impacts visitor conversion rates, search engine rankings, and user satisfaction. Core Web Vitals are Google\'s standardized metrics for measuring real-world user experience on the web.</p>
<h2>Understanding the Core Web Vitals</h2>
<ul>
  <li><strong>Largest Contentful Paint (LCP):</strong> Measures loading performance. Aim for under 2.5 seconds.</li>
  <li><strong>Interaction to Next Paint (INP):</strong> Measures responsiveness to user input. Aim for under 200 milliseconds.</li>
  <li><strong>Cumulative Layout Shift (CLS):</strong> Measures visual stability during page render. Aim for under 0.1.</li>
</ul>
<h2>Practical steps to improve performance</h2>
<ol>
  <li>Optimize and compress images using modern formats like WebP or AVIF.</li>
  <li>Minimize render-blocking CSS and JavaScript by deferring non-critical scripts.</li>
  <li>Implement efficient caching and server-side responses.</li>
  <li>Use responsive image sizing and specify width/height attributes to prevent layout shifts.</li>
</ol>',
                'author' => 'Nimad Tech Team',
                'read_time' => '3 min read',
                'meta_title' => 'Website performance and Core Web Vitals: the basics | Nimad Tech',
                'meta_description' => 'What Core Web Vitals measure and the practical changes that usually make a website faster.',
                'is_published' => true,
                'published_at' => '2026-10-12 10:00:00',
            ],
            [
                'title' => 'What to prepare before contacting a software development company',
                'slug' => 'what-to-prepare-before-contacting-a-development-company',
                'category' => 'Guides',
                'image' => 'assets/img/blogs/what-to-prepare-software-development.svg',
                'excerpt' => 'A short checklist that helps you get a faster, more accurate response to your project enquiry.',
                'content' => '<p>When reaching out to a software development partner, having clear baseline information prepared helps teams provide realistic timelines, accurate estimates, and structured project proposals.</p>
<h2>Key items to prepare</h2>
<ul>
  <li><strong>The core problem:</strong> Define what business challenge you want this software to solve and who the target users are.</li>
  <li><strong>Current workflows:</strong> Describe how you currently handle this task (spreadsheets, third-party software, manual entry).</li>
  <li><strong>Key integrations:</strong> List external platforms, payment gateways, or ERPs that must communicate with the new software.</li>
  <li><strong>Budget and timeline:</strong> State realistic timeframes and investment ranges so the development team can recommend the right scope and phases.</li>
</ul>',
                'author' => 'Nimad Tech Team',
                'read_time' => '4 min read',
                'meta_title' => 'What to prepare before contacting a software development company | Nimad Tech',
                'meta_description' => 'A short checklist that helps you get a faster, more accurate response to your project enquiry.',
                'is_published' => true,
                'published_at' => '2026-10-10 10:00:00',
            ],
            [
                'title' => 'Where AI and automation actually help a growing business',
                'slug' => 'where-ai-automation-actually-helps-small-businesses',
                'category' => 'AI & Automation',
                'image' => 'assets/img/blogs/where-ai-automation-helps-business.svg',
                'excerpt' => 'Practical places to start with AI and workflow automation, and where to be careful.',
                'content' => '<p>AI is transforming modern business operations, but real ROI comes from applying intelligence to high-volume, repetitive processes rather than adopting buzzwords for their own sake.</p>
<h2>Highest value AI applications</h2>
<ul>
  <li><strong>Document Processing:</strong> Automated parsing and extraction from invoices, contracts, and receipts.</li>
  <li><strong>Customer Support Assist:</strong> Intelligent chatbots and automated triage for standard support inquiries.</li>
  <li><strong>Workflow Automation:</strong> Triggering cross-system actions when orders, leads, or inventory updates occur.</li>
  <li><strong>Personalized Communication:</strong> Drafting context-aware follow-up messages for sales and operations.</li>
</ul>',
                'author' => 'Nimad Tech Team',
                'read_time' => '4 min read',
                'meta_title' => 'Where AI and automation actually help a growing business | Nimad Tech',
                'meta_description' => 'Practical places to start with AI and workflow automation, and where to be careful.',
                'is_published' => true,
                'published_at' => '2026-10-08 10:00:00',
            ],
            [
                'title' => 'Five signs your business application needs modernization',
                'slug' => 'signs-your-application-needs-modernization',
                'category' => 'Modernization',
                'image' => 'assets/img/blogs/signs-application-needs-modernization.svg',
                'excerpt' => 'Slow, fragile or impossible to change: how to recognise when ageing software is costing more than it saves.',
                'content' => '<p>Legacy software often continues running for years, but as codebases age, maintenance costs spiral, security vulnerabilities appear, and business agility diminishes.</p>
<h2>Signs it is time to modernize</h2>
<ol>
  <li>Small changes take weeks or months and risk breaking unrelated features.</li>
  <li>Performance slows down noticeably under increasing traffic and data volumes.</li>
  <li>The technology stack or PHP/framework version is no longer receiving security patches.</li>
  <li>Only one or two people understand how the system works, creating a major single point of failure.</li>
  <li>Inability to integrate with modern APIs, mobile devices, or cloud services.</li>
</ol>',
                'author' => 'Nimad Tech Team',
                'read_time' => '3 min read',
                'meta_title' => 'Five signs your business application needs modernization | Nimad Tech',
                'meta_description' => 'Slow, fragile or impossible to change: how to recognise when ageing software is costing more than it saves.',
                'is_published' => true,
                'published_at' => '2026-10-06 10:00:00',
            ],
            [
                'title' => 'Custom software or off-the-shelf: how to decide',
                'slug' => 'custom-software-vs-off-the-shelf',
                'category' => 'Strategy',
                'image' => 'assets/img/blogs/custom-software-vs-off-the-shelf.svg',
                'excerpt' => 'When a ready-made product is the smart choice, and when building something tailored pays off.',
                'content' => '<p>&quot;Should we build or buy?&quot; is one of the most common questions business leaders ask. The honest answer is that both options have their rightful place.</p>
<h2>When off-the-shelf is better</h2>
<p>If your process is standard and a well-supported product covers most of what you need (e.g. basic email, accounting), buy it. You get fast deployment and vendor maintenance.</p>
<h2>When custom software pays off</h2>
<p>Build custom software when your unique workflow is a competitive advantage, when off-the-shelf software requires frustrating workarounds, or when licensing fees scale prohibitively.</p>',
                'author' => 'Nimad Tech Team',
                'read_time' => '3 min read',
                'meta_title' => 'Custom software or off-the-shelf: how to decide | Nimad Tech',
                'meta_description' => 'When a ready-made product is the smart choice, and when building something tailored pays off.',
                'is_published' => true,
                'published_at' => '2026-10-03 10:00:00',
            ],
            [
                'title' => 'How to scope a software project so the estimate means something',
                'slug' => 'how-to-scope-a-software-project',
                'category' => 'Guides',
                'image' => 'assets/img/blogs/how-to-scope-software-project.svg',
                'excerpt' => 'A practical way to describe a software project so a development partner can give you an estimate you can rely on.',
                'content' => '<p>Estimates are only as reliable as the clarity of requirements behind them. A disciplined scoping process avoids budget overruns and scope creep.</p>
<h2>Elements of a dependable scope</h2>
<ul>
  <li>User personas: Define distinct user roles (admin, staff, end customer) and what permissions each needs.</li>
  <li>Feature list by priority: Separate must-have features (MVP) from nice-to-have additions.</li>
  <li>Data flow and third-party dependencies: Identify where data originates and what systems must sync.</li>
  <li>Acceptance criteria: Clearly state what defines completion for each milestone.</li>
</ul>',
                'author' => 'Nimad Tech Team',
                'read_time' => '4 min read',
                'meta_title' => 'How to scope a software project so the estimate means something | Nimad Tech',
                'meta_description' => 'A practical way to describe a software project so a development partner can give you an estimate you can rely on.',
                'is_published' => true,
                'published_at' => '2026-10-01 10:00:00',
            ],
        ];

        foreach ($blogs as $b) {
            Blog::updateOrCreate(
                ['slug' => $b['slug']],
                $b
            );
        }
    }
}
