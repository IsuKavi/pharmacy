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
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                @include('includes.messages')
                <div class="container-fluid">
                    <form action="login" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            LOGIN
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>

</html>
