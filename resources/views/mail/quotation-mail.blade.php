<x-mail::message>
    # Prośba o zapytanie ofertowe

    Imię: {{$name}}

    Email: {{ $email }}

    Liczba pracowników: {{ $employees }}

    ### Treść wiadomości:

    {{ str_replace(PHP_EOL, PHP_EOL.PHP_EOL, $message) }}

</x-mail::message>
