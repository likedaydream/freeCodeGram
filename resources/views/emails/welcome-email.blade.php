@component('mail::message')
# Welcome to freeCodeGram

This is a community of fellow developers and we love tha you have joined us.

@component('mail::button', ['url' => '/login'])
Login
@endcomponent

All the best<br>
{{ config('app.name') }}
@endcomponent
