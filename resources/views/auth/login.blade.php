<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - TecnoWe1</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            min-height: 100vh; 
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%); 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            padding: 20px; 
        }
        .login-container { 
            background: rgba(255,255,255,0.15); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(255,255,255,0.2); 
            border-radius: 25px; 
            padding: 50px; 
            width: 100%; 
            max-width: 450px; 
            box-shadow: 0 25px 45px rgba(0,0,0,0.1); 
            animation: slideIn 0.8s ease-out; 
        }
        .login-title { 
            text-align: center; 
            font-size: 2.2em; 
            color: white; 
            margin-bottom: 30px; 
            text-shadow: 0 2px 10px rgba(0,0,0,0.3); 
        }
        .form-group { margin-bottom: 25px; }
        .form-group label { 
            display: block; 
            color: rgba(255,255,255,0.9); 
            margin-bottom: 8px; 
            font-weight: 500; 
        }
        input[type="email"], input[type="password"], input[type="text"] { 
            width: 100%; 
            padding: 15px 20px; 
            border: 1px solid rgba(255,255,255,0.3); 
            border-radius: 12px; 
            background: rgba(255,255,255,0.9); 
            font-size: 1em; 
            transition: all 0.3s ease; 
            font-family: inherit; 
        }
        input:focus { 
            outline: none; 
            border-color: #667eea; 
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.2); 
            transform: scale(1.02); 
        }
        .login-btn { 
            width: 100%; 
            padding: 16px; 
            background: linear-gradient(135deg, #667eea, #764ba2); 
            color: white; 
            border: none; 
            border-radius: 12px; 
            font-size: 1.1em; 
            font-weight: 600; 
            cursor: pointer; 
            transition: all 0.3s ease; 
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4); 
            text-transform: uppercase; 
            letter-spacing: 1px; 
        }
        .login-btn:hover { 
            transform: translateY(-2px); 
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6); 
        }
        .login-btn:active { transform: translateY(0); }
        .error { 
            background: rgba(255,0,0,0.2); 
            border: 1px solid rgba(255,0,0,0.4); 
            border-radius: 10px; 
            padding: 15px; 
            margin-bottom: 20px; 
            color: #fee; 
            animation: shake 0.5s ease-in-out; 
        }
        .link { 
            text-align: center; 
            margin-top: 25px; 
            color: rgba(255,255,255,0.9); 
        }
        .link a { 
            color: #fff; 
            text-decoration: none; 
            font-weight: 600; 
            transition: all 0.3s ease; 
        }
        .link a:hover { color: #f0f0f0; text-shadow: 0 0 10px rgba(255,255,255,0.5); }
        @keyframes slideIn { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes shake { 0%, 100% { transform: translateX(0); } 25% { transform: translateX(-5px); } 75% { transform: translateX(5px); } }
        @media (max-width: 480px) { .login-container { padding: 30px 20px; margin: 10px; } }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Iniciar Sesión</h1>
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="tu@email.com" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
            </div>
            <button type="submit" class="login-btn">Entrar a mi cuenta</button>
        </form>
        <div class="link">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Crea una gratis</a></p>
        </div>
    </div>
</body>
</html>
