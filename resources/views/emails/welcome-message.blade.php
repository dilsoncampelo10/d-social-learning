<x-mail::message>
# Seja Bem Vindo {{$user->name}}

Estamos feliz que tenha realizado seu cadastro.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
