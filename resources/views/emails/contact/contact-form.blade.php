@component('mail::message')
# Bonjour 

Vous avez recu un mail de {{ $data->nom }} ({{ $data->email }})

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
