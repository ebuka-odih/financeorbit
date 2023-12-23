@component('mail::message')


<p>{{ $message->body }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
