@extends('layouts.app')

@section('title', 'Ver Torneo - Torneoz')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Futbol Apertura 2026</h1>
        <a href="/tournaments" class="btn btn-secondary">← Volver</a>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
        <div class="card">
            <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Formato</p>
            <h3 style="color: var(--primary); margin: 0;">Grupos y Eliminación</h3>
        </div>
        <div class="card">
            <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Equipos Inscritos</p>
            <h3 style="color: var(--accent); margin: 0;">12 / 16</h3>
        </div>
        <div class="card">
            <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Estado</p>
            <h3 style="color: var(--primary); margin: 0;"><span class="badge badge-warning">En Preparación</span></h3>
        </div>
        <div class="card">
            <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Inicio</p>
            <h3 style="color: var(--primary); margin: 0;">15 de Julio</h3>
        </div>
    </div>

    <div class="card">
        <h2>Descripción</h2>
        <p>Torneo de futbol masculino en categoría mayores. Se jugará bajo las reglas de la FIFA con árbitros certificados. Todos los equipos deben presentar sus jugadores con documentación válida antes del inicio.</p>
    </div>

    <div class="card">
        <h2>Equipos Inscritos</h2>
        <table>
            <thead>
                <tr>
                    <th>Equipo</th>
                    <th>Responsable</th>
                    <th>Jugadores</th>
                    <th>Fecha Inscripción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>FC Dragons</td>
                    <td>Juan Pérez</td>
                    <td>11</td>
                    <td>2026-06-20</td>
                </tr>
                <tr>
                    <td>Los Ángeles FC</td>
                    <td>María González</td>
                    <td>11</td>
                    <td>2026-06-21</td>
                </tr>
                <tr>
                    <td>Equipo Ases</td>
                    <td>Carlos López</td>
                    <td>11</td>
                    <td>2026-06-22</td>
                </tr>
                <tr>
                    <td>Las Águilas</td>
                    <td>Roberto Silva</td>
                    <td>10</td>
                    <td>2026-06-25</td>
                </tr>
                <tr>
                    <td>Deportivo Unidos</td>
                    <td>Ana Martínez</td>
                    <td>11</td>
                    <td>2026-06-27</td>
                </tr>
                <tr>
                    <td>Equipo Central</td>
                    <td>Miguel Rodríguez</td>
                    <td>11</td>
                    <td>2026-06-28</td>
                </tr>
                <tr>
                    <td>Los Rápidos</td>
                    <td>Fernando Ruiz</td>
                    <td>11</td>
                    <td>2026-06-30</td>
                </tr>
                <tr>
                    <td>Real Unión</td>
                    <td>Patricia Sánchez</td>
                    <td>11</td>
                    <td>2026-07-01</td>
                </tr>
                <tr>
                    <td>Atlético Fuerte</td>
                    <td>Diego Morales</td>
                    <td>10</td>
                    <td>2026-07-02</td>
                </tr>
                <tr>
                    <td>Equipo Campeón</td>
                    <td>Lucia Mendez</td>
                    <td>11</td>
                    <td>2026-07-03</td>
                </tr>
                <tr>
                    <td>Los Titanes</td>
                    <td>Gabriel Flores</td>
                    <td>11</td>
                    <td>2026-07-04</td>
                </tr>
                <tr>
                    <td>Vanguardia</td>
                    <td>Isabel Vega</td>
                    <td>11</td>
                    <td>2026-07-05</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card">
        <h2>Configuración</h2>
        <div style="display: flex; gap: 1rem;">
            <a href="/tournaments/{{ $tournament['id'] }}/edit" class="btn btn-primary">Editar Torneo</a>
            <a href="#" class="btn btn-secondary">Ver Fixture</a>
            <a href="#" class="btn btn-secondary">Tabla de Posiciones</a>
        </div>
    </div>
@endsection
