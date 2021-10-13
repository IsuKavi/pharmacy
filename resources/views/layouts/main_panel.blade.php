<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <title>{{ config('app.name', 'PHARMACY') }}</title>
</head>

<body>
    {{-- NAV --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand">PHARMACY</a>
        </div>
    </nav>
    {{-- MAIN --}}
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
                <ul class="list-unstyled">
                    <li>
                        <button class="btn btn-dark">
                            ITEMS
                        </button>
                    </li>
                    <li class="mt-2">
                        <button class="btn btn-dark">
                            ADD ITEMS
                        </button>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                @include('includes.messages')
                @yield('content')
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>

</html>
