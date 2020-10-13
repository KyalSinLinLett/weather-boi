<!DOCTYPE html>
<html>
<head>
    <title>weather boi</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<style type="text/css">
    
    body {
        background-color: #30343f;
    }

    a {
        font-family: monospace;
    }

    #nav-b {
        background-color: #1b2021;
    }

    #about {
        font-size: 18px;
    }

    #brand {
        font-size: 25px;
    }

</style>

<body>

    <!-- Nav bar -->
    <nav id="nav-b" class="navbar navbar-expand-lg navbar-dark">

        <div class="container my-2">
            <a id="brand" class="navbar-brand" href="/">weather boi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">

                <li class="nav-item">
                  <a id="about" class="nav-link" href="/about">About</a>
                </li>

              </ul>
            </div>
        </div>

    </nav>

    <div id="app">
        <weather-component></weather-component>
    </div>

</body>

<footer>
    <div class="container text-light my-5">
        © Created by Kyal Sin Lin Lett, 2020
    </div>
</footer>
</html>