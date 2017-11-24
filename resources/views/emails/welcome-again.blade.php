@component('mail::message')
This is demo welcome

@component('mail::button', ['url' => ''])
Get Started
@endcomponent

@component('mail::table')

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
