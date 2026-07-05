@extends('layouts.app')

@section('title', 'Mis Torneos - Torneoz')

@section('content')
    <h1>Mis Torneos Inscritos</h1>

    <div style="display: flex; gap: 1rem; margin: 2rem 0; flex-wrap: wrap;">
        <button style="padding: 0.5rem 1.5rem; background-color: var(--primary); color: white; border: none; border-radius: 0.375rem; cursor: pointer;">Todos</button>
        <button style="padding: 0.5rem 1.5rem; background-color: white; color: var(--primary); border: 1px solid var(--border); border-radius: 0.375rem; cursor: pointer;">En Curso</button>
        <button style="padding: 0.5rem 1.5rem; background-color: white; color: var(--primary); border: 1px solid var(--border); border-radius: 0.375rem; cursor: pointer;">Completados</button>
    </div>

    <div class="grid">
        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Futbol Apertura 2026</h3>
                <p style="margin: 0; opacity: 0.9;">Mi Equipo: FC Dragons</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Grupos y Eliminación</p>
                <p><strong>Mi Posición:</strong> 2do lugar</p>
                <p><strong>Mis Puntos:</strong> 18 pts</p>
                <p><strong>Próximo Partido:</strong> 10 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-success">En Curso</span></p>
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
                <p><strong>Formato:</strong> Round Robin</p>
                <p><strong>Mi Posición:</strong> 1ro lugar</p>
                <p><strong>Mis Puntos:</strong> 24 pts</p>
                <p><strong>Próximo Partido:</strong> 8 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-success">En Curso</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-secondary">Tabla</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Futbol Clausura 2025</h3>
                <p style="margin: 0; opacity: 0.9;">Mi Equipo: FC Dragons</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Grupos y Eliminación</p>
                <p><strong>Posición Final:</strong> 3ro lugar</p>
                <p><strong>Puntos Finales:</strong> 15 pts</p>
                <p><strong>Finalizado:</strong> 30 de Junio</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Completado</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Resultados</a>
                <a href="#" class="btn btn-secondary">Tabla Final</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Torneo de Tenis</h3>
                <p style="margin: 0; opacity: 0.9;">Participante: Yo</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Eliminación Directa</p>
                <p><strong>Posición Final:</strong> Semifinal</p>
                <p><strong>Fecha de Inicio:</strong> 1 de Agosto</p>
                <p><strong>Finalizado:</strong> 15 de Agosto</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Completado</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Resultados</a>
                <a href="#" class="btn btn-secondary">Mi Recorrido</a>
            </div>
        </div>
    </div>

    <div class="card" style="margin-top: 2rem;">
        <h2>Próximos Compromisos</h2>
        <table>
            <thead>
                <tr>
                    <th>Torneo</th>
                    <th>Mi Equipo/Yo</th>
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
@endsection
