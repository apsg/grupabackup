<x-mail::message>
# Kontakt ze strony internetowej

Imię: {{$name}}

Email: {{ $email }}

Telefon: {{ $phone }}

### Treść wiadomości:

{{ str_replace(PHP_EOL, PHP_EOL.PHP_EOL, $message) }}

</x-mail::message>
