<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cadastro de Produtos</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        a {
            text-decoration: none;
            color: #FFF;
        }

        a:hover {
            text-decoration: none;
            color: #FFF;
        }
    </style>
</head>
<body>
    <div class="container">
        @component('component_navbar', [ "current" => $current])
        @endcomponent

        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    </div>

    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
