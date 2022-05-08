@component('mail::message')
# {{ $contact->subject }}

@component('mail::panel')
  {{ $contact->message }}
@endcomponent

Name : {{ $contact->name }}<br>
Email : <small><i><u>{{ $contact->email }}</u></i></small> <br>
{{ config('app.name') }}
@endcomponent
