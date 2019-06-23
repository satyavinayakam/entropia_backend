@component('mail::message')
# GL Request

<div style="color: #000; font-size: 16;"> Provider Name          : {!! $admission['provider_name'] !!}</div>
<div style="color: #000; font-size: 16;"> Provider Contact       : {!! $admission['provider_contact'] !!}</div>
<div style="color: #000; font-size: 16;"> Physician Name         : {!! $admission['physician_name'] !!}</div>
<div style="color: #000; font-size: 16;"> Member Name            : {!! $admission['member_name'] !!}</div>
<div style="color: #000; font-size: 16;"> Member Contact         : {!! $admission['member_contact'] !!}</div>
<div style="color: #000; font-size: 16;"> Member Card No         : {!! $admission['member_card'] !!}</div>
<div style="color: #000; font-size: 16;"> Member IC / Passport   : {!! $admission['nric'] !!}</div>
<div style="color: #000; font-size: 16;"> Corporate Name         : {!! $admission['corporate_name'] !!}</div>
<div style="color: #000; font-size: 16;"> Appointment Date       : {!! $admission['appointment_date'] !!}</div>
<br >
Thanks,<br>
{{ config('app.name') }}
@endcomponent
