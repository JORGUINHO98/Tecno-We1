@extends('layouts.app')

@section('title', 'Nuevo Cliente')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="text-center mb-12">
        <h1 class="text-5xl font-orbitron tracking-wider bg-gradient-to-r from-neon-cyan to-neon-purple bg-clip-text text-transparent drop-shadow-neon mb-4">NUEVO CLIENTE</h1>
        <a href="{{ route('cliente.index') }}" class="btn-outline-neon px-6 py-2 rounded-xl font-medium">← Volver a Lista</a>
    </div>

    <form method="POST" action="{{ route('cliente.store') }}" class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-10 shadow-2xl">
        @csrf
        
        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-400/50 backdrop-blur-xl rounded-2xl p-6 mb-8">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-200">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="space-y-6">
            <div>
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-3">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" required
                       class="w-full backdrop-blur-xl bg-white/20 border border-white/30 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-neon-cyan focus:ring-2 focus:ring-neon-cyan/50 transition-all font-medium">
            </div>

            <div>
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-3">Correo</label>
                <input type="email" name="coreo" value="{{ old('coreo') }}" required
                       class="w-full backdrop-blur-xl bg-white/20 border border-white/30 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-neon-cyan focus:ring-2 focus:ring-neon-cyan/50 transition-all font-medium">
            </div>

            <div>
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-3">Dirección</label>
                <textarea name="direccion" rows="4" required class="w-full backdrop-blur-xl bg-white/20 border border-white/30 rounded-2xl px-6 py-4 text-white placeholder-gray-400 focus:border-neon-cyan focus:ring-2 focus:ring-neon-cyan/50 transition-all font-medium">{{ old('direccion') }}</textarea>
            </div>
        </div>

        <div class="flex space-x-4 mt-10">
            <button type="submit" class="flex-1 btn-neon py-4 rounded-2xl text-lg font-semibold hover:scale-105">Crear Cliente</button>
            <a href="{{ route('cliente.index') }}" class="flex-1 btn-outline-neon py-4 rounded-2xl text-lg font-semibold text-center">Cancelar</a>
        </div>
    </form>
</div>
@endsection
