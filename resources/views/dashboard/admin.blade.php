@extends('layouts.app')

@section('title', 'Panel Administrativo - Torneoz')

@section('content')
    <h1>Panel Administrativo</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
        <div class="card">
            <h3 style="color: var(--primary); font-size: 2.5rem; margin: 0;">28</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Activos</p>
        </div>
        <div class="card">
            <h3 style="color: var(--accent); font-size: 2.5rem; margin: 0;">156</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Participantes Registrados</p>
        </div>
        <div class="card">
            <h3 style="color: var(--success); font-size: 2.5rem; margin: 0;">12</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Torneos Completados</p>
        </div>
        <div class="card">
            <h3 style="color: var(--primary-light); font-size: 2.5rem; margin: 0;">89</h3>
            <p style="color: #6b7280; margin: 0.5rem 0;">Organizadores</p>
        </div>
    </div>

    <div class="card">
        <h2>Gestión del Sistema</h2>
        <p style="color: #6b7280; margin-bottom: 1.5rem;">Acceso a herramientas administrativas y control de la plataforma</p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
            <a href="#" class="btn btn-primary" style="text-align: center; padding: 1rem;">
                👥 Gestionar Usuarios
            </a>
            <a href="#" class="btn btn-primary" style="text-align: center; padding: 1rem;">
                📋 Revisar Torneos
            </a>
            <a href="#" class="btn btn-primary" style="text-align: center; padding: 1rem;">
                📊 Reportes
            </a>
            <a href="#" class="btn btn-primary" style="text-align: center; padding: 1rem;">
                ⚙️ Configuración
            </a>
        </div>
    </div>

    <div class="card">
        <h2>Actividad Reciente</h2>
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Evento</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2026-07-05</td>
                    <td>Nuevo torneo creado</td>
                    <td>Juan Organizador</td>
                    <td><span class="badge badge-success">Completado</span></td>
                </tr>
                <tr>
                    <td>2026-07-04</td>
                    <td>Usuario registrado</td>
                    <td>Carlos Participante</td>
                    <td><span class="badge badge-primary">Pendiente</span></td>
                </tr>
                <tr>
                    <td>2026-07-03</td>
                    <td>Resultados registrados</td>
                    <td>María Organizadora</td>
                    <td><span class="badge badge-success">Completado</span></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
