@extends('layouts.app')

@section('title', 'Inicio - TecnoWe1')

@section('content')
<!-- Hero Section -->
<section class="auth-card p-12 md:p-20 text-center mb-16 glow-cyan transform-gpu">
    <h1 class="auth-title mb-6 md:mb-8">Bienvenido a TecnoWe1</h1>
    <p class="text-lg md:text-xl mb-10 max-w-2xl mx-auto opacity-90 leading-relaxed">Tu plataforma futurista para tecnología e innovación. Únete a la revolución digital con nosotros en un ecosistema neon cyberpunk.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
        <a href="{{ route('login') }}" class="btn-neon w-full sm:w-auto max-w-sm">Iniciar Sesión</a>
        <a href="{{ route('register') }}" class="btn-outline-neon w-full sm:w-auto max-w-sm">Registrarse Gratis</a>
    </div>
</section>

<!-- About Section -->
<section class="grid md:grid-cols-2 gap-12 items-center mb-20">
    <div>
        <h2 class="auth-title mb-6 text-left">Sobre TecnoWe1</h2>
        <p class="text-lg mb-6 opacity-90 leading-relaxed">TecnoWe1 es una plataforma innovadora dedicada a conectar desarrolladores, emprendedores y empresas tecnológicas. Construida con tecnologías modernas como Laravel, ofrecemos autenticación segura y experiencia de usuario excepcional.</p>
        <p class="text-lg opacity-90 leading-relaxed">Nuestra misión es hacer la tecnología accesible y poderosa para todos en un mundo cyberpunk.</p>
    </div>
    <div class="auth-card p-12 h-[400px] flex items-center justify-center glow-purple">
        <div class="text-6xl animate-pulse">🚀</div>
    </div>
</section>

<!-- Features Section -->
<section class="mb-20">
    <h2 class="auth-title text-center mb-16">Características Principales</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="auth-card p-8 text-center hover:glow-cyan transition-all hover:scale-105">
            <div class="text-5xl mb-4 animate-bounce">🔐</div>
            <h3 class="text-xl font-bold mb-4 font-orbitron">Autenticación Segura</h3>
            <p class="opacity-90">Login y registro con validación completa y hashing seguro de contraseñas.</p>
        </div>
        <div class="auth-card p-8 text-center hover:glow-purple transition-all hover:scale-105">
            <div class="text-5xl mb-4 animate-pulse">⚡</div>
            <h3 class="text-xl font-bold mb-4 font-orbitron">Diseño Cyberpunk</h3>
            <p class="opacity-90">Interfaz responsiva con efectos glassmorphism neon, animaciones CSS y diseño futurista.</p>
        </div>
        <div class="auth-card p-8 text-center hover:glow-cyan transition-all hover:scale-105">
            <div class="text-5xl mb-4 animate-spin slow-spin">📱</div>
            <h3 class="text-xl font-bold mb-4 font-orbitron">100% Responsivo</h3>
            <p class="opacity-90">Funciona perfectamente en móviles, tablets y desktop con neon glow effects.</p>
        </div>
        <div class="auth-card p-8 text-center hover:glow-purple transition-all hover:scale-105">
            <div class="text-5xl mb-4 animate-pulse">📞</div>
            <h3 class="text-xl font-bold mb-4 font-orbitron">Contacto Directo</h3>
            <p class="opacity-90">Ref. 78543210 | Santa Cruz, Bolivia</p>
            <a href="/contacto" class="btn-neon mt-4 inline-block">Contactar Ahora</a>
        </div>
    </div>
</section>
@endsection

<style>
@keyframes slow-spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
</style>
