<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

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
            line-height: inherit;
        }

        .link {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 2rem);
        }

        a {
            font-family: "Figtree", sans-serif;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            margin: 0 1rem;
            padding: 0.5rem 1rem;
            background-color: #2d3748;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            font-weight: 600;
            font-size: 0.75rem;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            cursor: pointer;
            transition: background-color 0.15s ease-in-out;
        }

        a:hover,
        a:focus {
            background-color: #4a5568;
            outline: none;
        }

        a:active {
            background-color: #1a202c;
        }

        a:focus {
            outline: 2px solid #667eea;

            outline-offset: 2px;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative">
        @if (Route::has('login'))
            <div class="link">
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrati</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>

</html>
