@extends('layouts.app')

@section('title', 'Bienvenida - TecnoWe1')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="auth-card p-12 md:p-16 text-center">
        <h1 class="auth-title mb-8 font-orbitron">¡Bienvenido!</h1>
        <p class="text-xl mb-12 opacity-90 leading-relaxed">Gracias por unirte a TecnoWe1, la plataforma futurista de tecnología.</p>
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <div class="p-6 bg-white/10 rounded-2xl border border-neon-cyan/30 hover:glow-cyan transition-all">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold mb-2">Explora</h3>
                <p class="opacity-90">Descubre nuestras características neon cyberpunk.</p>
            </div>
            <div class="p-6 bg-white/10 rounded-2xl border border-neon-purple/30 hover:glow-purple transition-all">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-2">Conecta</h3>
                <p class="opacity-90">Únete a la comunidad tecnológica.</p>
            </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="{{ route('inicio') }}" class="btn-neon px-12 py-4 text-lg">
                Ir al Inicio
            </a>
            <a href="{{ route('contacto') }}" class="btn-outline-neon px-12 py-4 text-lg">
                Contacto
            </a>
        </div>
    </div>
</div>
@endsection
