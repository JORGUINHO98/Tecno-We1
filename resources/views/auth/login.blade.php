@extends('layouts.app')

@section('title', 'Iniciar Sesión - TecnoWe1')

@section('content')
<div class="container">
    <div class="auth-card">
        <h1 class="auth-title">Iniciar Sesión</h1>
        
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="tu@email.com" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="auth-btn">Entrar a mi cuenta</button>
        </form>
        
        <div class="link">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Crea una gratis</a></p>
        </div>
    </div>
</div>
@endsection
