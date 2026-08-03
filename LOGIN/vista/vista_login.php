<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #2563eb;
            --primary-hover: #1d4ed8;
            --bg-gradient-start: #0f172a;
            --bg-gradient-end: #1e293b;
            --card-bg: #ffffff;
            --text-main: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --input-bg: #f8fafc;
            --error-bg: #fef2f2;
            --error-text: #ef4444;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, var(--bg-gradient-start) 0%, var(--bg-gradient-end) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1.5rem;
        }

        .login-card {
            background: var(--card-bg);
            padding: 3rem 2.5rem;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 420px;
            animation: slideUpFade 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            opacity: 0;
            transform: translateY(30px);
        }

        @keyframes slideUpFade {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-header h2 {
            color: var(--text-main);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -0.025em;
        }

        .login-header p {
            color: var(--text-muted);
            font-size: 1rem;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--text-main);
            font-size: 0.95rem;
            font-weight: 600;
        }

        .input-container {
            position: relative;
            display: flex;
            align-items: center;
        }

        .input-container i {
            position: absolute;
            left: 1.2rem;
            color: var(--text-muted);
            font-size: 1.1rem;
            transition: color 0.3s ease;
        }

        .input-container input {
            width: 100%;
            padding: 0.85rem 1rem 0.85rem 3rem;
            border: 2px solid var(--border-color);
            border-radius: 10px;
            font-size: 1rem;
            color: var(--text-main);
            background-color: var(--input-bg);
            transition: all 0.3s ease;
        }

        .input-container input::placeholder {
            color: #94a3b8;
        }

        .input-container input:focus {
            outline: none;
            border-color: var(--primary-color);
            background-color: #ffffff;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .input-container input:focus + i,
        .input-container input:focus ~ i {
            color: var(--primary-color);
        }

        .btn-submit {
            width: 100%;
            padding: 0.9rem;
            background-color: var(--primary-color);
            color: #ffffff;
            border: none;
            border-radius: 10px;
            font-size: 1.05rem;
            font-weight: 600;
            letter-spacing: 0.025em;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-submit:hover {
            background-color: var(--primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 8px 15px rgba(37, 99, 235, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
            box-shadow: none;
        }

        /* Estilo para el contenedor de error estático demostrativo */
        .error-message {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            background-color: var(--error-bg);
            border-left: 4px solid var(--error-text);
            color: var(--error-text);
            font-size: 0.95rem;
            font-weight: 500;
            padding: 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 480px) {
            .login-card {
                padding: 2rem 1.5rem;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            }
            
            .login-header h2 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-card">
        <div class="login-header">
            <h2>Bienvenido</h2>
            <p>Ingresa tus credenciales para acceder</p>
        </div>

      
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Correo Electrónico</label>
                <div class="input-container">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" name="usuario" placeholder="usuario" required>
                </div>
            </div>
            
            <div class="form-group">
                <label>Contraseña</label>
                <div class="input-container">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="contrasena" placeholder="••••••••" required>
                </div>
            </div>
            
            <button type="submit" class="btn-submit">
                <span>Ingresar</span>
                <i class="fa-solid fa-arrow-right-to-bracket"></i>
            </button>
        </form>
    </div>
</body>

</html>