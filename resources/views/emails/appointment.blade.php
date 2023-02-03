@component('mail::message')
<h2>Appointment Notice</h2>

Hi, I am {{$appointment->name}}, <br>
{{$appointment->appointment_note}}

@component('mail::button', ['url' => env('APP_URL') . '/admin/appointment'])
View Message On App
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
