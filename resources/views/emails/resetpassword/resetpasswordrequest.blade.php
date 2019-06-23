@component('mail::message')
# Forgot Password

<div style="color: #000; font-size: 16;"> New Password  : {!! $newPassword['password'] !!}</div>
<br >
<br >
Thanks,<br>
{{ config('app.name') }}
@endcomponent
