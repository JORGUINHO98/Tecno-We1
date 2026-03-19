@extends('layouts.app')

@section('title', 'Lista de Clientes')

@section('content')
<div class="max-w-7xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-4xl font-orbitron tracking-wider bg-gradient-to-r from-neon-cyan to-neon-purple bg-clip-text text-transparent drop-shadow-neon">CLIENTES</h1>
        <a href="{{ route('cliente.create') }}" class="btn-neon px-8 py-3 rounded-xl font-medium text-lg hover:scale-105 transition-all">+ Nuevo Cliente</a>
    </div>

    @if (session('success'))
        <div class="bg-green-500/20 border border-green-400/50 backdrop-blur-xl rounded-2xl p-6 mb-8 text-green-100">
            {{ session('success') }}
        </div>
    @endif

    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 shadow-2xl">
        @if($clientes->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-white/20">
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">ID</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Nombre</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Correo</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Dirección</th>
                            <th class="py-4 px-6 font-rajdhani font-semibold text-neon-cyan">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr class="border-b border-white/10 hover:bg-white/5 transition-all">
                            <td class="py-4 px-6 font-mono text-cyan-400">{{ $cliente->id }}</td>
                            <td class="py-4 px-6 font-semibold">{{ $cliente->nombre }}</td>
                            <td class="py-4 px-6">{{ $cliente->coreo }}</td>
                            <td class="py-4 px-6">{{ $cliente->direccion }}</td>
                            <td class="py-4 px-6 space-x-2">
                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn-outline-neon px-4 py-2 rounded-lg text-sm">Editar</a>
                                <form method="POST" action="{{ route('cliente.destroy', $cliente->id) }}" class="inline" onsubmit="return confirm('¿Eliminar?')">
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
                <h3 class="text-2xl font-orbitron mb-2">Sin Clientes</h3>
                <p class="text-gray-400 mb-8">Crea el primero para comenzar.</p>
                <a href="{{ route('cliente.create') }}" class="btn-neon px-8 py-3 rounded-xl font-medium">+ Agregar Cliente</a>
            </div>
        @endif
    </div>
</div>
@endsection
