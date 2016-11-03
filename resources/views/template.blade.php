<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Certificados SEDHMJ</title>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet" />
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ Html::image('images/confdh.jpg', 'Certificados SEDHMJ') }}
                    </a>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
</body>
</html>