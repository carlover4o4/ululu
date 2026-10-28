@extends('layouts.auth')

@section('title', 'register')

@section('content')
<div class="brand">
    <h1>GrandStay</h1>
    <p>Buat Akun Baru</p>
</div>

@if ($errors->any())
<div class="message error">
    <ul>
        @foreach ($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
    
@endif

<form action="{{ route('register.store') }}" method="post">
    @csrf

    <div class="field">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Nama Lengkap" autocomplete="name" required>
    </div>

    <div class="field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email aktif"
                autocomplete="email" required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Minimal 8 karakter" autocomplete="new-password" required>
        </div>

        <div class="field">
            <label for="password_confirmation">Ulangi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Ulangi password" autocomplete="new-password" required>
        </div>

        <button type="submit">Daftar</button>
</form>

<div class="footer">
    Sudah punya akun?
    <a href="{{ route('login') }}">Login</a>
</div>
@endsection