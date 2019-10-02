<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pagetitle')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                height: 100%;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                height: 100%;
                display: flex;
                justify-content: center;
                position: relative;
            }

            .title {
                font-size: 84px;
            }
            .links {
                /* display: flex;
                align-items: center;
                height: 100%; */
            }
            #nav .links > a {
                color: #636b6f;
                padding: 0 1.2em;
                font-size: 1.5vw;
                font-weight: 600;
                letter-spacing: .1em;
                text-decoration: none;
                text-transform: uppercase;
            }
            @media screen and (min-width: 1100px) {
                #nav .links > a {
                    font-size: 16.5px;
                }
            }
            .m-b-md {
                position: absolute;
                margin-bottom: 30px;
                top: 20vh;
            }
            .grid-container {
                display: grid;
                width: 100vw;
                height: 100vh;
                grid-template-areas: "nav nav"
                                     "main main";
                grid-template-rows: minmax(100px, 10vh); 
            }
            #nav {
                grid-area: nav;
                display: grid;
                grid-template-areas: "leftnav rightnav";
            }
            #main {
                grid-area: main;
            }
            .left-nav {
                grid-area: leftnav;
            }
            .right-nav {
                grid-area: rightnav;
            }
        </style>
    </head>
    <body class="grid-container">

        <div id="nav">
            <div class="left-nav flex-center">
                <div class="links">
                    <a href="/myfirstproject/public/">Home</a>
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="/myfirstproject/public/about">About</a>
                    <a href="/myfirstproject/public/contact">Contact</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>            
            </div>
            <div class="right-nav flex-center">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @else
                    <h1>test</h1>
                @endif
            </div>
        </div>

        <div id="main">
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>
            </div>
        </div>

    </body>
</html>
