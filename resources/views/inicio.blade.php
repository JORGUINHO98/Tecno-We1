<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - TecnoWe1</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Bienvenido a TecnoWe1</h1>
                <p>Tu plataforma moderna para tecnología e innovación. Únete a la revolución digital con nosotros.</p>
                <div class="btn-group">
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-secondary">Registrarse Gratis</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Sobre Nosotros</h2>
                    <p>TecnoWe1 es una plataforma innovadora dedicada a conectar desarrolladores, emprendedores y empresas tecnológicas. Ofrecemos herramientas modernas, autenticación segura y una experiencia de usuario excepcional construida con PHP, HTML, CSS y MySQL.</p>
                    <p>Nuestra misión es hacer la tecnología accesible y poderosa para todos.</p>

                </div>
                <div class="about-image"></div>

            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 20px; color: #2c3e50;">Características Principales</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔐</div>
                    <h3>Autenticación Segura</h3>
                    <p>Login y registro con validación completa y hashing seguro de contraseñas.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3>Diseño Moderno</h3>
                    <p>Interfaz responsiva con efectos glassmorphism, animaciones CSS puras y diseño elegante.</p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📱</div>
                    <h3>100% Responsivo</h3>
                    <p>Funciona perfectamente en móviles, tablets y desktop.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3>Contacto Directo</h3>
                    <p>Ref. 78543210 | Santa Cruz, Bolivia</p>
                    <a href="/contacto" style="display: inline-block; margin-top: 15px; padding: 10px 20px; background: linear-gradient(135deg, #667eea, #764ba2); color: white; text-decoration: none; border-radius: 25px; transition: all 0.3s ease;">Contactar Ahora</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

