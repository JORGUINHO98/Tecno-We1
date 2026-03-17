<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - TecnoWe1</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
        /* Hero Section */
        .hero { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 100px 0; text-align: center; position: relative; overflow: hidden; }
        .hero::before { content: ''; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.1); }
        .hero-content { position: relative; z-index: 1; }
        .hero h1 { font-size: 3.5em; margin-bottom: 20px; animation: fadeInUp 1s ease; }
        .hero p { font-size: 1.3em; margin-bottom: 40px; animation: fadeInUp 1s ease 0.2s both; }
        .btn-group { display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; animation: fadeInUp 1s ease 0.4s both; }
        .btn { padding: 15px 30px; border: none; border-radius: 50px; font-size: 1.1em; font-weight: 600; cursor: pointer; transition: all 0.3s ease; text-decoration: none; display: inline-block; box-shadow: 0 10px 30px rgba(0,0,0,0.2); }
        .btn-primary { background: rgba(255,255,255,0.2); color: white; backdrop-filter: blur(10px); }
        .btn-primary:hover { background: rgba(255,255,255,0.3); transform: translateY(-3px); box-shadow: 0 15px 40px rgba(0,0,0,0.3); }
        .btn-secondary { background: white; color: #667eea; }
        .btn-secondary:hover { background: #f0f0f0; transform: translateY(-3px); box-shadow: 0 15px 40px rgba(0,0,0,0.2); }
        /* About Section */
        .about { padding: 80px 0; background: #f8f9ff; }
        .about-content { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
        .about-text h2 { font-size: 2.5em; margin-bottom: 20px; color: #2c3e50; }
        .about-text p { font-size: 1.2em; color: #666; margin-bottom: 30px; line-height: 1.8; }
        .about-image { background: linear-gradient(45deg, #667eea, #764ba2); height: 400px; border-radius: 20px; position: relative; overflow: hidden; }
        .about-image::before { content: ''; position: absolute; top: 50%; left: 50%; width: 300px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 50%; transform: translate(-50%, -50%); animation: float 6s ease-in-out infinite; }
        /* Features */
        .features { padding: 80px 0; background: white; }
        .features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px; margin-top: 60px; }
        .feature-card { text-align: center; padding: 40px 20px; border-radius: 20px; background: white; box-shadow: 0 20px 60px rgba(0,0,0,0.1); transition: all 0.3s ease; }
        .feature-card:hover { transform: translateY(-10px); box-shadow: 0 30px 80px rgba(0,0,0,0.15); }
        .feature-icon { font-size: 4em; margin-bottom: 20px; background: linear-gradient(135deg, #667eea, #764ba2); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        /* Responsive */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2.5em; }
            .hero p { font-size: 1.1em; }
            .btn-group { flex-direction: column; align-items: center; }
            .about-content { grid-template-columns: 1fr; text-align: center; gap: 40px; }
        }
        /* Animations */
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes float { 0%, 100% { transform: translate(-50%, -50%) translateY(0px); } 50% { transform: translate(-50%, -50%) translateY(-20px); } }
        .glass { background: rgba(255,255,255,0.1); backdrop-filter: blur(20px); border: 1px solid rgba(255,255,255,0.2); }
    </style>
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

