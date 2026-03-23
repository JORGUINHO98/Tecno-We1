@extends('layouts.app')

@section('title', 'Lista de Productos')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-orbitron tracking-wider bg-gradient-to-r from-neon-cyan to-neon-purple bg-clip-text text-transparent drop-shadow-neon">PRODUCTOS</h1>
        <a href="{{ route('producto.create') }}" class="btn-neon px-8 py-3 rounded-xl font-medium text-lg hover:scale-105 transition-all">+ Nuevo Producto</a>
    </div>

    @if (session('success'))
        <div class="bg-green-500/20 border border-green-400/50 backdrop-blur-xl rounded-2xl p-6 mb-8 text-green-100">
            {{ session('success') }}
        </div>
    @endif

    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 shadow-2xl">
        @if($productos->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-white/20">
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">ID</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Nombre</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Descripción</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Precio</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Stock</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr class="border-b border-white/10 hover:bg-white/5 transition-all">
                            <td class="py-4 px-6 font-mono text-cyan-400">{{ $producto->id }}</td>
                            <td class="py-4 px-6 font-semibold">{{ $producto->nombre }}</td>
                            <td class="py-4 px-6">{{ Str::limit($producto->descripcion, 50) }}</td>
                            <td class="py-4 px-6 font-semibold text-green-400">Bs. {{ number_format($producto->precio, 2) }}</td>
                            <td class="py-4 px-6">
                                <span class="px-3 py-1 bg-blue-500/30 border border-blue-400/50 rounded-full text-sm font-medium">
                                    {{ $producto->stock }}
                                </span>
                            </td>
                            <td class="py-4 px-6 space-x-2">
                                <a href="{{ route('producto.edit', $producto->id) }}" class="btn-outline-neon px-4 py-2 rounded-lg text-sm">Editar</a>
                                <form method="POST" action="{{ route('producto.destroy', $producto->id) }}" class="inline" onsubmit="return confirm('¿Eliminar este producto?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500/80 hover:bg-red-500 text-white px-4 py-2 rounded-lg text-sm transition-all">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-r from-neon-cyan to-neon-purple rounded-3xl mx-auto mb-4 animate-pulse"></div>
                <h3 class="text-2xl font-orbitron mb-2">Sin Productos</h3>
                <p class="text-gray-400 mb-8">Crea el primero para comenzar.</p>
                <a href="{{ route('producto.create') }}" class="btn-neon px-8 py-3 rounded-xl font-medium">+ Agregar Producto</a>
            </div>
        @endif
    </div>
</div>
@endsection
