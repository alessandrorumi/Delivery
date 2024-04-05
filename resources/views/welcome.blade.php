<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #ffffff
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Inter, system-ui, Avenir, Helvetica, Arial, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 1rem;
            line-height: inherit
        }

        a {
            color: rgb(255, 255, 255);
            background-color: rgb(44, 52, 66);
            font-size: .9rem;
            font-weight: bold;
            text-decoration: none;
            padding: .25rem .65rem;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">LOGIN</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">REGISTRATI</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
