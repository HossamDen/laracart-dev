@component('mail::message')
# Introduction
Hey {{ $data['name'] }} - {{ $data['email'] }}
{{ $data['msg'] }}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
