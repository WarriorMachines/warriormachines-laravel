<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Warrior Machines</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway" type="text/css">
</head>
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div>
        Username
        <input type="username" name="username" value="{{ old('username') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
<script src="{{ elixir('js/all.js') }}"></script>
</body>
</html>
