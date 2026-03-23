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

    {{-- Search & Filter Form --}}
    <div class="backdrop-blur-xl bg-white/5 border border-white/10 rounded-2xl p-6 mb-8">
        <form method="GET" class="flex flex-col md:flex-row gap-4 items-end">
            @csrf
            <div class="flex-1 min-w-0">
                <label class="block font-rajdhani font-semibold text-neon-cyan mb-2">Buscar</label>
                <input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Nombre o descripción..." 
                       class="w-full backdrop-blur-xl bg-white/20 border border-white/30 rounded-xl px-5 py-3 text-white placeholder-gray-400 focus:border-neon-cyan focus:ring-2 ring-neon-cyan/50 transition-all font-medium">
            </div>
            
            <div class="flex-1 min-w-0">
                <label class="block font-rajdhani font-semibold text-green-400 mb-2">Precio Mín (Bs)</label>
                <input type="number" step="0.01" name="min_precio" value="{{ $minPrecio ?? '' }}" placeholder="0.00"
                       class="w-full backdrop-blur-xl bg-white/20 border border-green-400/30 rounded-xl px-5 py-3 text-white placeholder-gray-400 focus:border-green-400 focus:ring-2 ring-green-400/50 transition-all font-medium">
            </div>
            
            <div class="flex-1 min-w-0">
                <label class="block font-rajdhani font-semibold text-green-400 mb-2">Precio Máx (Bs)</label>
                <input type="number" step="0.01" name="max_precio" value="{{ $maxPrecio ?? '' }}" placeholder="9999.99"
                       class="w-full backdrop-blur-xl bg-white/20 border border-green-400/30 rounded-xl px-5 py-3 text-white placeholder-gray-400 focus:border-green-400 focus:ring-2 ring-green-400/50 transition-all font-medium">
            </div>
            
            <div class="flex-1 min-w-0">
                <label class="block font-rajdhani font-semibold text-blue-400 mb-2">Stock Mín</label>
                <input type="number" name="min_stock" value="{{ $minStock ?? '' }}" min="0" placeholder="0"
                       class="w-full backdrop-blur-xl bg-white/20 border border-blue-400/30 rounded-xl px-5 py-3 text-white placeholder-gray-400 focus:border-blue-400 focus:ring-2 ring-blue-400/50 transition-all font-medium">
            </div>

            <div class="flex gap-2">
                <button type="submit" class="btn-neon px-6 py-3 rounded-xl font-medium flex-1 md:flex-none">Buscar</button>
                <a href="{{ route('producto.index') }}" class="btn-outline-neon px-6 py-3 rounded-xl font-medium flex-1 md:flex-none">Limpiar</a>
            </div>
        </form>
    </div>

    {{-- View Toggle --}}
    <div class="mb-6 flex justify-between items-center">
        <div class="text-sm text-gray-400">
            Mostrando {{ $productos->firstItem() ?? 0 }}-{{ $productos->lastItem() ?? 0 }} de {{ $productos->total() }} resultados
            @if($search || $minPrecio || $maxPrecio || $minStock)(filtrados)@endif
        </div>
        <div class="flex gap-2">
            <a href="{{ route('producto.index', request()->query() + ['view' => 'table']) }}" 
               class="p-3 rounded-xl {{ $viewMode == 'table' ? 'bg-neon-cyan/20 border-2 border-neon-cyan text-neon-cyan' : 'text-gray-400 hover:text-cyan-300' }} transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                </svg>
            </a>
            <a href="{{ route('producto.index', request()->query() + ['view' => 'cards']) }}" 
               class="p-3 rounded-xl {{ $viewMode == 'cards' ? 'bg-neon-cyan/20 border-2 border-neon-cyan text-neon-cyan' : 'text-gray-400 hover:text-cyan-300' }} transition-all">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-3xl p-8 shadow-2xl">
        @if($productos->count() > 0)
            @if($viewMode == 'table')
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
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($productos as $producto)
                    <div class="backdrop-blur-xl bg-white/10 border border-white/20 rounded-2xl p-6 hover:scale-105 hover:border-neon-cyan/50 transition-all group">
                        <div class="flex justify-between items-start mb-4">
                            <span class="font-mono text-cyan-400 text-sm bg-black/20 px-3 py-1 rounded-lg">ID {{ $producto->id }}</span>
                            <div class="flex gap-2 opacity-0 group-hover:opacity-100 transition-all">
                                <a href="{{ route('producto.edit', $producto->id) }}" class="btn-outline-neon px-3 py-1 rounded-lg text-xs">Editar</a>
                                <form method="POST" action="{{ route('producto.destroy', $producto->id) }}" class="inline" onsubmit="return confirm('¿Eliminar?')">
                                    @csrf @method('DELETE')
                                    <button class="bg-red-500/80 hover:bg-red-500 text-white px-3 py-1 rounded-lg text-xs transition-all">Eliminar</button>
                                </form>
                            </div>
                        </div>
                        
                        <h3 class="font-semibold text-xl mb-3 line-clamp-2 leading-tight">{{ $producto->nombre }}</h3>
                        
                        <p class="text-gray-300 mb-4 line-clamp-2 leading-relaxed">{{ $producto->descripcion }}</p>
                        
                        <div class="space-y-2 mb-4">
                            <div class="flex justify-between">
                                <span class="text-green-400 font-semibold text-lg">Bs. {{ number_format($producto->precio, 2) }}</span>
                            </div>
                            <div>
                                <span class="inline-flex items-center px-3 py-1 bg-blue-500/30 border border-blue-400/50 rounded-full text-sm font-medium">
                                    Stock: {{ $producto->stock }}
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
            
            {{ $productos->links() }}
        @else
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gradient-to-r from-neon-cyan to-neon-purple rounded-3xl mx-auto mb-4 animate-pulse"></div>
                <h3 class="text-2xl font-orbitron mb-2">Sin Productos{{ $search ? ' coincidentes' : '' }}</h3>
                <p class="text-gray-400 mb-8">{{ $search ? 'Intenta con otros términos.' : 'Crea el primero para comenzar.' }}</p>
                <a href="{{ route('producto.create') }}" class="btn-neon px-8 py-3 rounded-xl font-medium">+ Agregar Producto</a>
            </div>
        @endif
    </div>
</div>
@endsection
