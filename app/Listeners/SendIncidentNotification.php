<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Jobs\SendIncidentNotificationJob;
use App\Events\IncidentReported;

class SendIncidentNotification implements ShouldQueue
{

    public function __construct()
    {
    }


    public function handle(IncidentReported $event)
    {
        SendIncidentNotificationJob::dispatch($event->incident);
    }
}
