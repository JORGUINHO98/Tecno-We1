@extends('layouts.app')

@section('title', 'Contacto - TecnoWe1')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="auth-card p-12 md:p-16 text-center">
        <h1 class="auth-title mb-8">Contacto</h1>
        <p class="text-xl mb-12 opacity-90 leading-relaxed">Contáctanos para más información sobre nuestra plataforma futurista.</p>
        <div class="space-y-4 mb-12">
            <p class="text-lg opacity-90">
                <span class="font-semibold text-neon-cyan">Teléfono:</span> 78543210
            </p>
            <p class="text-lg opacity-90">
                <span class="font-semibold text-neon-cyan">Ubicación:</span> Santa Cruz, Bolivia
            </p>
            <p class="text-lg opacity-90">
                <span class="font-semibold text-neon-cyan">Email:</span> info@tecnowe1.com
            </p>
        </div>
        <a href="/" class="btn-outline-neon px-12 py-4 text-lg inline-block">
            ← Volver al Inicio
        </a>
    </div>
</div>
@endsection
