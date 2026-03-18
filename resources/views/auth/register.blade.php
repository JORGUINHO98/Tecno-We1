@extends('layouts.app')

@section('title', 'Registro - TecnoWe1')

@section('content')
<div class="container">
    <div class="auth-card">
        <h1 class="auth-title">Crear Cuenta</h1>
        
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input type="text" id="name" name="name" placeholder="Tu nombre completo" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="tu@email.com" value="{{ old('email') }}" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Mínimo 6 caracteres" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu contraseña" required>
            </div>
            <button type="submit" class="auth-btn">Crear mi cuenta gratis</button>
        </form>
        
        <div class="link">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</div>
@endsection
