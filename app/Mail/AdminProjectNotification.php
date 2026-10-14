<?php

namespace App\Mail;

use App\Models\ProjectRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminProjectNotification extends Mailable
{
    use Queueable, SerializesModels;

    public ProjectRequest $project;

    public function __construct(ProjectRequest $project)
    {
        $this->project = $project;
    }

    public function build()
    {
        return $this->subject('🚀 New Project Request from ' . $this->project->full_name)
                    ->view('emails.admin-project');
    }
}
