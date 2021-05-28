<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
    <input type="checkbox" name="" checked="checked">
    <span class="icon"></span>
    <ul>
        <li><a href="/mobil">Data Mobil</a></li>
        <li><a href="/admin">Data Admin</a></li>
        <li><a href="/user">Data User</a></li>
        <li><a href="/logout">Log Out</a></li>
    </ul>
    <section>

    @yield('container')

    </section>
</div>
</body>
</html>