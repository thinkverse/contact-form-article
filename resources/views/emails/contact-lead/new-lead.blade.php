@component('mail::message')
# Hurray, a new contact lead! 🎉

__Name:__ {{ $lead->name }}<br>
__Email:__ {{ $lead->email }}<br>
__Phone:__ {{ $lead->phone }}<br>
__Preferred:__ {{ $lead->preferred }}<br>

__Message__<br>
{{ $lead->message }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
