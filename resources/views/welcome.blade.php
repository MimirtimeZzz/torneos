@extends('layouts.app')

@section('title', 'Inicio - Torneoz')

@section('content')
    <div class="hero">
        <h1>Gestiona tus Torneos Deportivos</h1>
        <p>Plataforma completa para organizar, registrar y seguir competencias deportivas</p>
        @guest
            <a href="/register" class="btn" style="background-color: white; color: var(--primary); margin-right: 1rem;">Crear Cuenta</a>
            <a href="/login" class="btn" style="background-color: var(--accent); color: white;">Ingresar</a>
        @else
            <a href="/dashboard" class="btn" style="background-color: white; color: var(--primary);">Ir al Dashboard</a>
        @endguest
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
        <div class="card">
            <h3 style="color: var(--accent); margin-bottom: 0.5rem;">📋 Para Organizadores</h3>
            <p>Crea y gestiona torneos, define formatos, registra resultados y controla participantes en tiempo real.</p>
        </div>
        <div class="card">
            <h3 style="color: var(--primary); margin-bottom: 0.5rem;">⚽ Para Participantes</h3>
            <p>Explora torneos disponibles, regístrate con tu equipo y sigue el progreso de la competencia.</p>
        </div>
        <div class="card">
            <h3 style="color: var(--success); margin-bottom: 0.5rem;">📊 Control Total</h3>
            <p>Visualiza tablas de posiciones, resultados de partidos y estadísticas detalladas de cada torneo.</p>
        </div>
    </div>
@endsection
