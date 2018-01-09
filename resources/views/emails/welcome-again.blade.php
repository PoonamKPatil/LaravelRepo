@component('mail::message')
# Introduction

Thank you so much for registering.

@component('mail::button', ['url' => ''])
Start browsing
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
