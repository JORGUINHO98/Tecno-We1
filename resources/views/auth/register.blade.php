<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoWe1 - CyberCat Registro</title>
<style>
        :root {
            --neon-pink: #ff00ff;
            --neon-blue: #00ffff;
            --neon-purple: #9d00ff;
            --bg-dark: #0a0a12;
            --text-glow: 0 0 10px rgba(255, 0, 255, 0.7);
            --text-glow-blue: 0 0 10px rgba(0, 255, 255, 0.7);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
            background-image: url('https://files.manuscdn.com/user_upload_by_module/session_file/103142169/TuXBifMolTReehzf.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Overlay oscuro para mejorar legibilidad del formulario */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 10, 18, 0.25);
            backdrop-filter: blur(1px);
            z-index: 0;
        }

        /* Contenedor principal del login */
        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 40px;
            background: rgba(10, 10, 18, 0.75);
            border: 2px solid var(--neon-pink);
            border-radius: 15px;
            box-shadow: 
                0 0 30px rgba(255, 0, 255, 0.5),
                0 0 60px rgba(255, 0, 255, 0.2),
                inset 0 0 20px rgba(0, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Encabezado */
        .login-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .login-title {
            font-size: 28px;
            font-weight: bold;
            color: white;
            text-shadow: var(--text-glow);
            margin-bottom: 8px;
            letter-spacing: 2px;
        }

        .login-subtitle {
            font-size: 12px;
            color: var(--neon-blue);
            text-shadow: var(--text-glow-blue);
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* Línea decorativa */
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--neon-pink), transparent);
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(255, 0, 255, 0.3);
        }

        /* Grupo de formulario */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--neon-blue);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: var(--text-glow-blue);
        }

        /* Campos de entrada */
        .form-input {
            width: 100%;
            padding: 12px 15px;
            background: rgba(26, 26, 26, 0.9);
            border: 2px solid rgba(255, 0, 255, 0.4);
            border-radius: 8px;
            color: white;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: 'Courier New', Courier, monospace;
        }

        .form-input:focus {
            outline: none;
            background: rgba(26, 26, 26, 1);
            border-color: var(--neon-pink);
            box-shadow: 
                0 0 15px rgba(255, 0, 255, 0.6),
                inset 0 0 10px rgba(255, 0, 255, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        /* Botón de login -->
        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, var(--neon-pink), var(--neon-purple));
            border: 2px solid var(--neon-pink);
            border-radius: 8px;
            color: white;
            font-size: 14px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.4);
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
        }

        .btn-login:hover {
            background: linear-gradient(135deg, var(--neon-purple), var(--neon-pink));
            box-shadow: 
                0 0 30px rgba(255, 0, 255, 0.7),
                0 0 60px rgba(255, 0, 255, 0.4);
            transform: translateY(-2px);
        }

        .btn-login:active {
            transform: translateY(0);
            box-shadow: 0 0 20px rgba(255, 0, 255, 0.4);
        }

        /* Pie de página */
        .login-footer {
            text-align: center;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 0, 255, 0.2);
        }

        .login-footer p {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 10px;
        }

        .login-footer a {
            color: var(--neon-blue);
            text-decoration: none;
            text-shadow: var(--text-glow-blue);
            transition: all 0.3s ease;
            font-weight: 600;
        }

        .login-footer a:hover {
            color: var(--neon-pink);
            text-shadow: var(--text-glow);
        }

        /* Error styles */
        .error-messages {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.5);
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
            color: #fecaca;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .login-container {
                max-width: 90%;
                padding: 30px 20px;
                margin: 20px;
            }

            .login-title {
                font-size: 24px;
            }

            body {
                background-attachment: scroll;
            }
        }
    </style>


</head>
<body>
    <!-- Línea de escaneo animada -->
    <div class="scan-line"></div>

    <!-- Contenedor del registro -->
    <div class="login-container">
        <!-- Indicador de estado -->
        <div class="status-indicator"></div>

        <!-- Encabezado -->
        <div class="login-header">
            <h1 class="login-title">TecnoWe1</h1>
        </div>

        <div class="divider"></div>

        <!-- Formulario -->
        <form method="POST" action="{{ route('register') }}">
@csrf
{{ csrf_field() }}
            @if ($errors->any())
                <div class="bg-red-500/20 border border-red-400/50 backdrop-blur-xl rounded-2xl p-4 mb-6 text-red-100">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Campo nombre -->
            <div class="form-group">
                <label for="name">Nombre Completo</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name"
                    class="form-input" 
                    placeholder="Ingresa tu nombre completo"
                    value="{{ old('name') }}"
                    required
                    autofocus
                >
            </div>

            <!-- Campo email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email"
                    class="form-input" 
                    placeholder="Ingresa tu email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <!-- Campo contraseña -->
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password"
                    class="form-input" 
                    placeholder="Ingresa tu contraseña"
                    required
                >
            </div>

            <!-- Confirmar contraseña -->
            <div class="form-group">
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input 
                    type="password" 
                    id="password_confirmation" 
                    name="password_confirmation"
                    class="form-input" 
                    placeholder="Confirma tu contraseña"
                    required
                >
            </div>

            <!-- Botón de registro -->
            <button type="submit" class="btn-login">Crear Cuenta</button>
        </form>

        <!-- Pie de página -->
        <div class="login-footer">
            <p>¿Ya tienes cuenta?</p>
            <a href="{{ route('login') }}">Inicia sesión aquí</a>
        </div>
    </div>

    <footer style="position: fixed; bottom: 10px; left: 0; right: 0; text-align: center; color: rgba(255,255,255,0.7); font-size: 12px; z-index: 20;">
        TecnoWe1 © 2026
    </footer>
</body>
</html>

