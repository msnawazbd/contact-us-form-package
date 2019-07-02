@component('mail::message')
# Introduction

Hello, There is new query from {{ $name }}
<br>
Message: {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
