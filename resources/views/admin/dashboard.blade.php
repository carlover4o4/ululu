<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin - GrandStay</title>
</head>

<body>
    <h1>GrandStay Admin</h1>
    <h2>Dashboard Admin</h2>

    <p>Selamat Datang, {{ auth()->user()->name }}</p>
    <p>Login admin berhasil</p>

    <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit">Logout</button>
    </form>
</body>

</html>
