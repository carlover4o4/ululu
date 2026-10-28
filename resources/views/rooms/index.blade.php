<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cari Kamar - GrandStay</title>
</head>

<body>
    <h1>GrandStay</h1>
    <h2>Cari Kamar</h2>

    <p>Selamat datang, {{ auth()->user()->name }}</p>
    <p>Login customer berhasil.</p>

    <form action="{{ route('logout') }}" method="post">
       @csrf
    <button type="submit">Logout</button> 
    </form>
    
</body>

</html>
