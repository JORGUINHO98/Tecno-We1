@extends('layouts.app')

@section('title', 'Welcome - TecnoWe1')

@section('content')
<div class="flex flex-col-reverse lg:flex-row max-w-4xl mx-auto gap-0 lg:gap-0 w-full">
    <!-- Content Panel -->
    <div class="auth-card lg:rounded-bl-3xl lg:rounded-br-none p-8 lg:p-12 flex-1">
        <h1 class="auth-title mb-6 font-orbitron">¡Empecemos!</h1>
        <p class="mb-8 text-lg opacity-90 leading-relaxed">Laravel tiene un ecosistema increíblemente rico. Te sugerimos comenzar con lo siguiente en nuestro tema neon cyberpunk.</p>
        <ul class="space-y-4 mb-12">
            <li class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-neon-cyan/30">
                <div class="w-8 h-8 bg-neon-cyan rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                    <span class="w-2 h-2 bg-white rounded-full"></span>
                </div>
                <div>
                    Lee la <a href="https://laravel.com/docs" target="_blank" class="font-semibold underline decoration-neon-glow hover:text-neon-purple transition-colors">Documentación</a> de Laravel.
                </div>
            </li>
            <li class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-neon-purple/30">
                <div class="w-8 h-8 bg-neon-purple rounded-full flex items-center justify-center mt-1 flex-shrink-0">
                    <span class="w-2 h-2 bg-white rounded-full"></span>
                </div>
                <div>
                    Mira tutoriales en video en <a href="https://laracasts.com" target="_blank" class="font-semibold underline decoration-neon-glow hover:text-neon-cyan transition-colors">Laracasts</a>.
                </div>
            </li>
        </ul>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="https://cloud.laravel.com" target="_blank" class="btn-neon px-8 py-3 rounded-xl font-semibold inline-flex items-center justify-center">
                Deploy Now
            </a>
        </div>
    </div>
    
    <!-- SVG Art Panel -->
    <div class="bg-gradient-to-br from-neon-cyan/20 to-neon-purple/20 lg:w-[450px] lg:rounded-tr-3xl relative overflow-hidden border-r-2 border-neon-glow/50">
        <!-- Simplified Neon Laravel Logo -->
        <svg class="w-full h-full p-12" viewBox="0 0 438 104" fill="none">
            <text x="50%" y="60%" text-anchor="middle" font-family="Orbitron" font-weight="900" font-size="48" fill="url(#neonGradient)" filter="url(#glow)" class="drop-shadow-neon">TECNO</text>
            <text x="50%" y="85%" text-anchor="middle" font-family="Orbitron" font-weight="700" font-size="36" fill="url(#cyanGradient)" class="drop-shadow-glow">WE1</text>
            <defs>
                <linearGradient id="neonGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#00f0ff">
                    <stop offset="50%" stop-color="#ff00ff">
                    <stop offset="100%" stop-color="#00d4ff">
                </linearGradient>
                <linearGradient id="cyanGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" stop-color="#00f0ff">
                    <stop offset="100%" stop-color="#0ff">
                </linearGradient>
                <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
                    <feMerge> 
                        <feMergeNode in="coloredBlur"/>
                        <feMergeNode in="SourceGraphic"/>
                    </feMerge>
                </filter>
            </defs>
        </svg>
    </div>
</div>
@endsection
