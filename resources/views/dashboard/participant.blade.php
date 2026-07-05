@extends('layouts.app')

@section('title', 'Mi Dashboard - Torneoz')

@section('content')
    <h1>Bienvenido, {{ auth()->user()->name }}</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
        <div class="card">
            <h3 style="color: var(--primary); font-size: 2.5rem; margin: 0;">3</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Inscritos</p>
        </div>
        <div class="card">
            <h3 style="color: var(--accent); font-size: 2.5rem; margin: 0;">1</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos en Curso</p>
        </div>
        <div class="card">
            <h3 style="color: var(--success); font-size: 2.5rem; margin: 0;">2</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Completados</p>
        </div>
    </div>

    <div class="card">
        <h2>Mis Torneos Activos</h2>
        <div class="grid">
            <div class="tournament-card">
                <div class="tournament-card-header">
                    <h3>Futbol Apertura 2026</h3>
                    <p style="margin: 0; opacity: 0.9;">Mi Equipo: FC Dragons</p>
                </div>
                <div class="tournament-card-body">
                    <p><strong>Posición:</strong> 2do lugar</p>
                    <p><strong>Puntos:</strong> 18 pts</p>
                    <p><strong>Siguiente Partido:</strong> 10 de Julio</p>
                    <p><strong>Rival:</strong> Equipo Ases</p>
                </div>
                <div class="tournament-card-footer">
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                    <a href="#" class="btn btn-secondary">Tabla</a>
                </div>
            </div>

            <div class="tournament-card">
                <div class="tournament-card-header">
                    <h3>Voleibol Femenino</h3>
                    <p style="margin: 0; opacity: 0.9;">Mi Equipo: Vóley Stars</p>
                </div>
                <div class="tournament-card-body">
                    <p><strong>Posición:</strong> 1ro lugar</p>
                    <p><strong>Puntos:</strong> 24 pts</p>
                    <p><strong>Siguiente Partido:</strong> 8 de Julio</p>
                    <p><strong>Rival:</strong> Equipo Central</p>
                </div>
                <div class="tournament-card-footer">
                    <a href="#" class="btn btn-primary">Ver Detalles</a>
                    <a href="#" class="btn btn-secondary">Tabla</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h2>Próximos Compromisos</h2>
        <table>
            <thead>
                <tr>
                    <th>Torneo</th>
                    <th>Mi Equipo</th>
                    <th>Rival</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Voleibol Femenino</td>
                    <td>Vóley Stars</td>
                    <td>Equipo Central</td>
                    <td>2026-07-08</td>
                    <td>19:00</td>
                </tr>
                <tr>
                    <td>Futbol Apertura 2026</td>
                    <td>FC Dragons</td>
                    <td>Equipo Ases</td>
                    <td>2026-07-10</td>
                    <td>20:00</td>
                </tr>
                <tr>
                    <td>Futbol Apertura 2026</td>
                    <td>FC Dragons</td>
                    <td>Los Rápidos</td>
                    <td>2026-07-15</td>
                    <td>18:30</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card">
        <h2>Explorar Más Torneos</h2>
        <p style="color: #6b7280; margin-bottom: 1.5rem;">Encuentra y únete a otros torneos disponibles</p>
        <a href="/participants/explore" class="btn btn-accent">Ver Torneos Disponibles</a>
    </div>
@endsection
