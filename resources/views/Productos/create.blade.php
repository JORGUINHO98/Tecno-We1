@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex items-center mb-12">
        <a href="{{ route('producto.index') }}" class="inline-flex items-center space-x-2 text-neon-cyan hover:text-cyan-300 transition-all">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
            <span>Volver a Productos</span>
        </a>
    </div>

    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-10 shadow-2xl">
        <h1 class="text-4xl font-orbitron tracking-wider bg-gradient-to-r from-neon-cyan to-neon-purple bg-clip-text text-transparent drop-shadow-neon mb-12 text-center">NUEVO PRODUCTO</h1>
        
        @if ($errors->any())
            <div class="bg-red-500/20 border border-red-400/50 backdrop-blur-xl rounded-2xl p-6 mb-8">
                <ul class="text-red-200 space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('producto.store') }}" class="space-y-8">
            @csrf
            
            <div>
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-4">Nombre del Producto</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" 
                       class="w-full p-5 backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl font-medium text-lg focus:ring-4 ring-neon-cyan focus:border-neon-cyan transition-all @error('nombre') border-red-400 @enderror"
                       placeholder="Ej: Laptop Gaming RTX 4080" required>
            </div>

            <div>
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-4">Descripción</label>
                <textarea name="descripcion" rows="5" class="w-full p-5 backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl font-medium text-lg focus:ring-4 ring-neon-cyan focus:border-neon-cyan transition-all @error('descripcion') border-red-400 @enderror" 
                          placeholder="Describe las características del producto..." required>{{ old('descripcion') }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                    <label class="block font-rajdhani font-semibold text-neon-cyan mb-4">Precio (Bs)</label>
                    <input type="number" step="0.01" name="precio" value="{{ old('precio') }}" 
                           class="w-full p-5 backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl font-medium text-lg focus:ring-4 ring-green-400 focus:border-green-400 transition-all @error('precio') border-red-400 @enderror"
                           placeholder="0.00" required>
                </div>
                <div>
                    <label class="block font-rajdhani font-semibold text-neon-cyan mb-4">Stock</label>
                    <input type="number" name="stock" value="{{ old('stock') }}" 
                           class="w-full p-5 backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl font-medium text-lg focus:ring-4 ring-blue-400 focus:border-blue-400 transition-all @error('stock') border-red-400 @enderror"
                           placeholder="0" min="0" required>
                </div>
            </div>

            <div class="flex space-x-4 pt-4">
                <button type="submit" class="flex-1 btn-neon py-5 rounded-2xl font-rajdhani font-semibold text-xl hover:scale-105 transition-all">
                    Crear Producto
                </button>
                <a href="{{ route('producto.index') }}" class="flex-1 text-center btn-outline-neon py-5 rounded-2xl font-rajdhani font-semibold text-xl hover:scale-105 transition-all">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
