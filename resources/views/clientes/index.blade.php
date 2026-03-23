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

    {{-- Search Form --}}
    <div class="backdrop-blur-xl bg-white/5 border border-white/10 rounded-2xl p-6 mb-8">
        <form method="GET" class="flex flex-col lg:flex-row gap-4 items-end">
            @csrf
            <div class="flex-[3] min-w-0">
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-2">Buscar Cliente</label>
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Nombre, correo o dirección..." 
                       class="w-full backdrop-blur-xl bg-white/20 border border-white/30 rounded-xl px-5 py-3 text-white placeholder-gray-400 focus:border-neon-cyan focus:ring-2 ring-neon-cyan/50 transition-all font-medium">
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn-neon px-8 py-3 rounded-xl font-medium flex-1 lg:flex-none">Buscar</button>
                <a href="{{ route('cliente.index') }}" class="btn-outline-neon px-8 py-3 rounded-xl font-medium flex-1 lg:flex-none">Limpiar</a>
            </div>
        </form>
    </div>

    {{-- View Toggle --}}
    <div class="mb-6 flex justify-between items-center">
        <div class="text-sm text-gray-400">
            Mostrando {{ $clientes->firstItem() ?? 0 }}-{{ $clientes->lastItem() ?? 0 }} de {{ $clientes->total() }} resultados
            @if($search)(filtrados)@endif
        </div>
        <div class="flex gap-2">
            <a href="{{ route('cliente.index', request()->query() + ['view' => 'table']) }}" 
               class="p-3 rounded-xl {{ $viewMode == 'table' ? 'bg-neon-cyan/20 border-2 border-neon-cyan text-neon-cyan' : 'text-gray-400 hover:text-cyan-300' }} transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
            </a>
            <a href="{{ route('cliente.index', request()->query() + ['view' => 'cards']) }}" 
               class="p-3 rounded-xl {{ $viewMode == 'cards' ? 'bg-neon-cyan/20 border-2 border-neon-cyan text-neon-cyan' : 'text-gray-400 hover:text-cyan-300' }} transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
            </a>
        </div>
    </div>

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
