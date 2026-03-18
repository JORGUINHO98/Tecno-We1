<!DOCTYPE html>
<html lang="es" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TecnoWe1 - Futuristic Tech Platform')</title>
    <!-- Futuristic Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        'orbitron': ['Orbitron', 'monospace'],
                        'rajdhani': ['Rajdhani', 'sans-serif'],
                    },
                    colors: {
                        neon: {
                            cyan: '#00f0ff',
                            blue: '#00d4ff',
                            purple: '#ff00ff',
                            glow: '#0ff',
                        },
                        darkbg: '#0a0a1a',
                    },
                    backdropBlur: {
                        xs: '4px',
                    }
                }
            }
        }
    </script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="font-rajdhani bg-darkbg text-white min-h-screen overflow-x-hidden">
    <!-- Animated Background -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-[-1]">
        <!-- Layer 1: Radial Gradient Pulse -->
        <div class="absolute inset-0 bg-gradient-to-br from-neon-cyan via-neon-blue to-neon-purple animate-pulse-slow opacity-30"></div>
        <!-- Layer 2: Moving Scanlines -->
        <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/5 to-transparent animate-scanline"></div>
        <!-- Layer 3: Floating Particles -->
        <div class="absolute inset-0">
            <div class="absolute w-2 h-2 bg-neon-glow rounded-full animate-float1 opacity-40"></div>
            <div class="absolute w-1 h-1 bg-neon-cyan rounded-full animate-float2 opacity-30"></div>
            <div class="absolute w-3 h-3 bg-neon-purple rounded-full animate-float3 opacity-20"></div>
            <!-- More particles for density -->
            <div class="absolute w-1.5 h-1.5 bg-neon-blue rounded-full animate-float4 opacity-35"></div>
            <div class="absolute w-2 h-2 bg-neon-glow rounded-full animate-float5 opacity-25"></div>
        </div>
        <!-- Glitch Effect Overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(90deg,transparent,neon-cyan,neon-purple,transparent)] animate-glitch opacity-20"></div>
    </div>

    <!-- Navigation -->
    <nav class="relative z-10 backdrop-blur-xl bg-white/10 border border-white/20 shadow-2xl mx-4 mt-4 rounded-2xl p-4 md:p-6 max-w-4xl mx-auto">
        <div class="flex items-center justify-between">
            <a href="/" class="text-2xl font-orbitron tracking-wider bg-gradient-to-r from-neon-cyan to-neon-purple bg-clip-text text-transparent drop-shadow-neon">TECNO WE1</a>
            <div class="flex items-center space-x-4">
@auth
                    <a href="/dashboard" class="btn-neon px-6 py-2 rounded-xl font-medium hover:scale-105 transition-all">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn-outline-neon px-6 py-2 rounded-xl font-medium hover:scale-105 transition-all">Login</a>
                    <a href="{{ route('register') }}" class="btn-neon px-6 py-2 rounded-xl font-medium hover:scale-105 transition-all">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10 container mx-auto px-4 py-8 md:py-12 max-w-6xl">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 backdrop-blur-xl bg-white/5 border-t border-white/20 mt-12 p-8 text-center text-sm opacity-75">
        <p>&copy; 2024 TecnoWe1. Plataforma Futurista de Tecnología. Ref: 78543210 | Santa Cruz, Bolivia</p>
    </footer>

    <style>
        .darkbg { background-color: #0a0a1a; }
        @keyframes pulse-slow { 0%, 100% { opacity: 0.3; } 50% { opacity: 0.6; } }
        @keyframes scanline { 0% { transform: translateX(-100%); } 100% { transform: translateX(100%); } }
        @keyframes float1 { 0%, 100% { transform: translateY(0px) rotate(0deg); } 33% { transform: translateY(-20px) rotate(120deg); } 66% { transform: translateY(-10px) rotate(240deg); } }
        @keyframes float2 { 0%, 100% { transform: translateY(0px) rotate(0deg); } 50% { transform: translateY(-30px) rotate(180deg); } }
        @keyframes float3 { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-15px); } }
        @keyframes float4 { 0%, 100% { transform: translate(0, 0) rotate(0deg); } 25% { transform: translate(10px, -10px) rotate(90deg); } 50% { transform: translate(20px, 0) rotate(180deg); } 75% { transform: translate(10px, 10px) rotate(270deg); } }
        @keyframes float5 { 0%, 100% { transform: scale(1); } 50% { transform: scale(1.2); } }
        @keyframes glitch { 0%, 100% { transform: translate(0); } 10% { transform: translate(-2px, 2px); } 20% { transform: translate(2px, -2px); } 30% { transform: translate(-1px, 1px); } }
        .animate-pulse-slow { animation: pulse-slow 8s ease-in-out infinite; }
        .animate-scanline { animation: scanline 20s linear infinite; }
        .animate-float1 { animation: float1 15s ease-in-out infinite; }
        .animate-float2 { animation: float2 20s ease-in-out infinite; }
        .animate-float3 { animation: float3 12s ease-in-out infinite; }
        .animate-float4 { animation: float4 18s ease-in-out infinite; }
        .animate-float5 { animation: float5 10s ease-in-out infinite; }
        .animate-glitch { animation: glitch 2s infinite; }
        .drop-shadow-neon { filter: drop-shadow(0 0 10px #00f0ff); }
        .backdrop-blur-xl { backdrop-filter: blur(20px); }
        .btn-neon {
            background: linear-gradient(45deg, #00f0ff, #ff00ff);
            box-shadow: 0 0 20px rgba(0, 240, 255, 0.5), inset 0 0 20px rgba(255, 0, 255, 0.3);
            border: 1px solid rgba(0, 240, 255, 0.5);
            color: #0a0a1a;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-neon:hover {
            box-shadow: 0 0 40px rgba(0, 240, 255, 0.8), 0 0 60px rgba(255, 0, 255, 0.6);
            transform: translateY(-2px);
        }
        .btn-outline-neon {
            background: transparent;
            border: 2px solid #00f0ff;
            color: #00f0ff;
            font-weight: 600;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        .btn-outline-neon:hover {
            background: linear-gradient(45deg, #00f0ff, #ff00ff);
            box-shadow: 0 0 30px rgba(0, 240, 255, 0.6);
            color: #0a0a1a;
        }
        @media (max-width: 768px) {
            nav { margin: 1rem; padding: 1rem; }
            .btn-neon, .btn-outline-neon { padding: 0.75rem 1.5rem; font-size: 0.9rem; }
        }
    </style>

