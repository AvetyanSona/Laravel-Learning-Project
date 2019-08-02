@component('mail::message')
# Introduction

Hello, my name is {{ $data['name'] }}
---------------
{{ $data['message']}}
---------------
Contact me with this address {{$data['email']}}
---------------
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
