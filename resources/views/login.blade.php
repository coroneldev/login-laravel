<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendible</title>
</head>
<body>
    @include('partials.nav')
    <h1>Login Aprendible</h1>    
    <pre>{{ Auth::user()}}</pre>
    <form method="POST">
        @csrf
        <label>
        <input name="email" type="email" placeholder="Email...">
        </label><br>
        <label>
        <input name="password" type="password" placeholder="Contraseña...">
        </label><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>