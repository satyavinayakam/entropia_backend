@component('mail::message')
# Feedback Submited By User

<div style="color: #000; font-size: 16;"> Feedback On  : {!! $feedback['feedback_type'] !!}</div>
<div style="color: #000; font-size: 16;"> Feedback     : {!! $feedback['feedback'] !!}</div>
<br >
Thanks,<br>
{{ config('app.name') }}
@endcomponent
