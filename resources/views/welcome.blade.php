<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental | Gestión Odontológica</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(120deg, #4f8cff 0%, #38c6c6 100%);
            color: #222;
        }
        header {
            background: rgba(255,255,255,0.95);
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 16px 0;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.2rem;
            color: #38c6c6;
            letter-spacing: 2px;
        }
        nav {
            margin-top: 8px;
        }
        nav a {
            color: #4f8cff;
            text-decoration: none;
            margin: 0 16px;
            font-weight: bold;
            font-size: 1.1rem;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #38c6c6;
        }
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 60vh;
            text-align: center;
        }
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 12px;
            color: #4f8cff;
        }
        .hero p {
            font-size: 1.3rem;
            margin-bottom: 32px;
            color: #333;
        }
        .hero .btn-group {
            display: flex;
            gap: 16px;
            justify-content: center;
        }
        .btn {
            background: #38c6c6;
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
            font-weight: bold;
        }
        .btn:hover {
            background: #4f8cff;
        }
        section {
            padding: 48px 0;
            background: rgba(255,255,255,0.85);
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            gap: 32px;
            justify-content: center;
            max-width: 900px;
            margin: 0 auto;
        }
        .feature {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            padding: 32px 24px;
            flex: 1 1 250px;
            min-width: 220px;
            text-align: center;
        }
        .feature h3 {
            color: #38c6c6;
            margin-bottom: 12px;
        }
        .feature p {
            color: #444;
        }
        footer {
            background: #222;
            color: #fff;
            text-align: center;
            padding: 24px 0 12px 0;
            margin-top: 32px;
        }
        @media (max-width: 700px) {
            .features {
                flex-direction: column;
                gap: 16px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Dental</h1>
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#caracteristicas">Características</a>
            <a href="#acceso">Acceso</a>
        </nav>
    </header>
    <div class="hero" id="inicio">
        <h2>Bienvenido a Dental</h2>
        <p>La plataforma moderna para la gestión de clínicas odontológicas.<br>Administra pacientes, recordatorios y mucho más.</p>
        <div class="btn-group">
            <button class="btn" onclick="window.location.href='/login'">Iniciar sesión</button>
            <button class="btn" onclick="window.location.href='/register'">Registrarse</button>
        </div>
    </div>
    <section id="caracteristicas">
        <h2 style="text-align:center; color:#4f8cff; margin-bottom:32px;">Características</h2>
        <div class="features">
            <div class="feature">
                <h3>Gestión de Pacientes</h3>
                <p>Registra, edita y consulta la información de tus pacientes de forma rápida y segura.</p>
            </div>
            <div class="feature">
                <h3>Recordatorios Inteligentes</h3>
                <p>Envía notificaciones automáticas y recordatorios personalizados por WhatsApp.</p>
            </div>
            <div class="feature">
                <h3>Panel Filament</h3>
                <p>Interfaz administrativa moderna y fácil de usar para el personal de la clínica.</p>
            </div>
            <div class="feature">
                <h3>Seguridad y Privacidad</h3>
                <p>Protege los datos de tus pacientes con autenticación y cifrado avanzado.</p>
            </div>
        </div>
    </section>
    <section id="acceso">
        <h2 style="text-align:center; color:#4f8cff; margin-bottom:32px;">Acceso</h2>
        <div style="display:flex; justify-content:center; gap:32px; flex-wrap:wrap;">
            <div style="background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.07); padding:32px 24px; min-width:220px;">
                <h3 style="color:#38c6c6;">¿Ya tienes cuenta?</h3>
                <button class="btn" onclick="window.location.href='/login'">Iniciar sesión</button>
            </div>
            <div style="background:#fff; border-radius:12px; box-shadow:0 2px 8px rgba(0,0,0,0.07); padding:32px 24px; min-width:220px;">
                <h3 style="color:#38c6c6;">¿Eres nuevo?</h3>
                <button class="btn" onclick="window.location.href='/register'">Registrarse</button>
            </div>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>