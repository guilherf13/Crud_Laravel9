<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href={{asset('css/estilo_basico.css')}}>
    </head>
    <body>
        <!--O yield redenriza a section conteudo. Ele joga a section aqui e vira um arquivo so -->
        @yield('conteudo')
    </body>
</html>