@component('mail::message')
# Olá {{ $user->name }}

Você está recebendo esse email porque sim!

@component('mail::button', ['url' => ''])
OLOCO
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
