@component('mail::message')
    # New Incident Reported

    An incident has been reported.

    **Description:** {{ $incident->description }}

    **Reported At:** {{ $incident->reported_at }}

    **Status:** {{ $incident->status }}

    @component('mail::button', ['url' => url('/incidents/' . $incident->id)])
        View Incident
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
