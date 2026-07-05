<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Torneoz - Gestión de Torneos')</title>
    <style>
        :root {
            --primary: #1e3a8a;
            --primary-light: #3b82f6;
            --accent: #f97316;
            --success: #22c55e;
            --danger: #ef4444;
            --dark: #0f172a;
            --light: #f8fafc;
            --border: #e2e8f0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            background-color: var(--light);
            color: #1f2937;
            line-height: 1.6;
        }

        nav {
            background-color: var(--primary);
            padding: 1rem 2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-brand span {
            color: var(--accent);
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
            list-style: none;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--accent);
        }

        .nav-menu a.active {
            color: var(--accent);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 0.5rem;
        }

        .user-menu {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-menu button {
            background-color: var(--accent);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            cursor: pointer;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .user-menu button:hover {
            background-color: #ea580c;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .card {
            background: white;
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
        }

        .card h2 {
            color: var(--primary);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            border-radius: 0.375rem;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            text-align: center;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: #1e40af;
        }

        .btn-accent {
            background-color: var(--accent);
            color: white;
        }

        .btn-accent:hover {
            background-color: #ea580c;
        }

        .btn-success {
            background-color: var(--success);
            color: white;
        }

        .btn-success:hover {
            background-color: #16a34a;
        }

        .btn-secondary {
            background-color: #6b7280;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #4b5563;
        }

        .btn-danger {
            background-color: var(--danger);
            color: white;
        }

        .btn-danger:hover {
            background-color: #dc2626;
        }

        .btn-group {
            display: flex;
            gap: 0.5rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--primary);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: 0.375rem;
            font-size: 1rem;
            font-family: inherit;
            transition: border-color 0.3s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .alert {
            padding: 1rem;
            border-radius: 0.375rem;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .alert-success {
            background-color: #dcfce7;
            color: #166534;
            border-left: 4px solid var(--success);
        }

        .alert-error {
            background-color: #fee2e2;
            color: #991b1b;
            border-left: 4px solid var(--danger);
        }

        .alert-info {
            background-color: #e0f2fe;
            color: #0c4a6e;
            border-left: 4px solid #0ea5e9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        thead {
            background-color: var(--primary);
            color: white;
        }

        th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
        }

        td {
            padding: 1rem;
            border-bottom: 1px solid var(--border);
        }

        tbody tr:hover {
            background-color: var(--light);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-top: 1.5rem;
        }

        .tournament-card {
            background: white;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .tournament-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .tournament-card-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 1.5rem;
            border-bottom: 4px solid var(--accent);
        }

        .tournament-card-header h3 {
            margin-bottom: 0.5rem;
        }

        .tournament-card-body {
            padding: 1.5rem;
        }

        .tournament-card-body p {
            margin-bottom: 0.75rem;
            color: #6b7280;
            font-size: 0.9rem;
        }

        .tournament-card-footer {
            padding: 1rem 1.5rem;
            border-top: 1px solid var(--border);
            display: flex;
            gap: 0.5rem;
        }

        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-primary {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .badge-success {
            background-color: #dcfce7;
            color: #166534;
        }

        .badge-warning {
            background-color: #fef3c7;
            color: #b45309;
        }

        .badge-accent {
            background-color: #fed7aa;
            color: #7c2d12;
        }

        footer {
            background-color: var(--primary);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            padding: 4rem 2rem;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-center {
            text-align: center;
        }

        .mt-2 {
            margin-top: 1rem;
        }

        .mb-2 {
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
                gap: 1rem;
            }

            .nav-menu {
                flex-direction: column;
                gap: 0.5rem;
            }

            .container {
                padding: 1rem;
            }

            .hero h1 {
                font-size: 1.8rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    @yield('styles')
</head>
<body>
    <nav>
        <a href="/" class="nav-brand">
            Torneo<span>z</span>
        </a>
        @auth
            <ul class="nav-menu">
                <li><a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">Dashboard</a></li>
                @if(auth()->user()->isOrganizer())
                    <li><a href="/tournaments" class="{{ request()->is('tournaments*') ? 'active' : '' }}">Torneos</a></li>
                @endif
                @if(auth()->user()->isParticipant())
                    <li><a href="/participants/explore" class="{{ request()->is('participants/explore') ? 'active' : '' }}">Explorar</a></li>
                    <li><a href="/participants/my-tournaments" class="{{ request()->is('participants/my-tournaments') ? 'active' : '' }}">Mis Torneos</a></li>
                @endif
                <li><a href="/profile" class="{{ request()->is('profile') ? 'active' : '' }}">Perfil</a></li>
            </ul>
            <div class="user-menu">
                <span style="color: white; font-weight: 500;">{{ auth()->user()->name }}</span>
                <form action="/logout" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            </div>
        @else
            <ul class="nav-menu">
                <li><a href="/">Inicio</a></li>
            </ul>
            <div class="user-menu">
                <a href="/login" class="btn btn-primary">Ingresar</a>
                <a href="/register" class="btn btn-accent">Registrarse</a>
            </div>
        @endauth
    </nav>

    <div class="container">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-error">
                    <span>⚠️</span>
                    <span>{{ $error }}</span>
                </div>
            @endforeach
        @endif

        @if(session('success'))
            <div class="alert alert-success">
                <span>✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                <span>✗</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @yield('content')
    </div>

    <footer>
        <p>&copy; 2026 Torneoz. Sistema de Gestión de Torneos Deportivos.</p>
    </footer>
</body>
</html>
