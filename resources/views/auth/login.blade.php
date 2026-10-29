@extends('layouts.auth')

@section('title', 'login')

@section('content')

    <div class="brand">
        <h1>GrandStay</h1>
        <p>Hotel &amp; Booking</p>
    </div>

    @if (session('success'))
        <div class="message success">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="message error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif

    <form action="{{ route('login.store') }}" method="post">
        @csrf

        <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukan Email"
                autocomplete="email" required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukan Password" autocomplete="current-password" required>
        </div>

        <button type="submit">Masuk</button>
    </form>

    <div class="footer">
        Belum punya akun?
        <a href="{{ route('register') }}">Daftar</a>
    </div>

    @endsection