@extends('layouts.app')

@section('title', 'Dashboard Organizador - Torneoz')

@section('content')
    <h1>Mis Torneos</h1>

    <a href="/tournaments/create" class="btn btn-accent" style="margin: 1.5rem 0;">+ Crear Nuevo Torneo</a>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
        <div class="card">
            <h3 style="color: var(--primary); font-size: 2.5rem; margin: 0;">5</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Activos</p>
        </div>
        <div class="card">
            <h3 style="color: var(--accent); font-size: 2.5rem; margin: 0;">48</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Total de Participantes</p>
        </div>
        <div class="card">
            <h3 style="color: var(--success); font-size: 2.5rem; margin: 0;">2</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Completados</p>
        </div>
    </div>

    <div class="card">
        <h2>Torneos en Curso</h2>
        <div class="grid">
            <div class="tournament-card">
                <div class="tournament-card-header">
                    <h3>Futbol Apertura 2026</h3>
                    <p style="margin: 0; opacity: 0.9;">Categoría: Mayores</p>
                </div>
                <div class="tournament-card-body">
                    <p><strong>Formato:</strong> Grupos y Eliminación</p>
                    <p><strong>Participantes:</strong> 12 equipos</p>
                    <p><strong>Inicio:</strong> 15 de Julio</p>
                    <p><strong>Estado:</strong> <span class="badge badge-warning">En Preparación</span></p>
                </div>
                <div class="tournament-card-footer">
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="#" class="btn btn-secondary">Editar</a>
                </div>
            </div>

            <div class="tournament-card">
                <div class="tournament-card-header">
                    <h3>Torneo de Tenis</h3>
                    <p style="margin: 0; opacity: 0.9;">Categoría: Abierta</p>
                </div>
                <div class="tournament-card-body">
                    <p><strong>Formato:</strong> Eliminación Directa</p>
                    <p><strong>Participantes:</strong> 16 jugadores</p>
                    <p><strong>Inicio:</strong> 1 de Agosto</p>
                    <p><strong>Estado:</strong> <span class="badge badge-primary">Registrando</span></p>
                </div>
                <div class="tournament-card-footer">
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="#" class="btn btn-secondary">Editar</a>
                </div>
            </div>

            <div class="tournament-card">
                <div class="tournament-card-header">
                    <h3>Voleibol Femenino</h3>
                    <p style="margin: 0; opacity: 0.9;">Categoría: Mayores</p>
                </div>
                <div class="tournament-card-body">
                    <p><strong>Formato:</strong> Round Robin</p>
                    <p><strong>Participantes:</strong> 8 equipos</p>
                    <p><strong>Inicio:</strong> 20 de Julio</p>
                    <p><strong>Estado:</strong> <span class="badge badge-success">En Curso</span></p>
                </div>
                <div class="tournament-card-footer">
                    <a href="#" class="btn btn-primary">Ver</a>
                    <a href="#" class="btn btn-secondary">Editar</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h2>Últimos Resultados</h2>
        <table>
            <thead>
                <tr>
                    <th>Torneo</th>
                    <th>Partido</th>
                    <th>Resultado</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Voleibol Femenino</td>
                    <td>Los Ángeles vs Deportivo</td>
                    <td>2 - 0</td>
                    <td>2026-07-05</td>
                </tr>
                <tr>
                    <td>Voleibol Femenino</td>
                    <td>Central vs Unidos</td>
                    <td>1 - 2</td>
                    <td>2026-07-05</td>
                </tr>
                <tr>
                    <td>Futbol Apertura 2026</td>
                    <td>Equipo A vs Equipo B</td>
                    <td>3 - 1</td>
                    <td>2026-07-04</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
