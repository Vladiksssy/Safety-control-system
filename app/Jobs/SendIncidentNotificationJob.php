<?php

namespace App\Jobs;

use App\Mail\IncidentNotification;
use App\Models\Incident;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class SendIncidentNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $incident;

    public function __construct(incident $incident)
    {
       $this->incident = $incident;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        try {
            Log::info('SendIncidentNotificationJob is being handled for incident: ' . $this->incident->id);
            Mail::to('admin@example.com')->send(new IncidentNotification($this->incident));
            Log::info('Email sent successfully for incident: ' . $this->incident->id);
        } catch (Exception $e) {
            Log::error('Failed to send email for incident: ' . $this->incident->id . ' Error: ' . $e->getMessage());
            throw $e;
        }
    }
}
