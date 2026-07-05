@extends('layouts.app')

@section('title', 'Explorar Torneos - Torneoz')

@section('content')
    <h1>Explorar Torneos Disponibles</h1>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; margin-bottom: 2rem;">
        <div class="form-group" style="margin-bottom: 0;">
            <input
                type="text"
                placeholder="Buscar por nombre..."
                style="margin-bottom: 0;"
            >
        </div>
        <div class="form-group" style="margin-bottom: 0;">
            <select style="margin-bottom: 0;">
                <option value="">-- Todos los Formatos --</option>
                <option value="grupos">Grupos y Eliminación</option>
                <option value="eliminacion">Eliminación Directa</option>
                <option value="roundrobin">Round Robin</option>
            </select>
        </div>
        <div class="form-group" style="margin-bottom: 0;">
            <select style="margin-bottom: 0;">
                <option value="">-- Todos los Estados --</option>
                <option value="preparacion">En Preparación</option>
                <option value="registrando">Registrando</option>
                <option value="curso">En Curso</option>
            </select>
        </div>
    </div>

    <div class="grid">
        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Futbol Apertura 2026</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Mayores</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Grupos y Eliminación</p>
                <p><strong>Equipos:</strong> 12 / 16</p>
                <p><strong>Inicio:</strong> 15 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-warning">En Preparación</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-accent">Registrarse</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Torneo de Tenis</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Abierta</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Eliminación Directa</p>
                <p><strong>Participantes:</strong> 14 / 16</p>
                <p><strong>Inicio:</strong> 1 de Agosto</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Registrando</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-accent">Registrarse</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Voleibol Femenino</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Mayores</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Round Robin</p>
                <p><strong>Equipos:</strong> 8 / 8</p>
                <p><strong>Inicio:</strong> 20 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-success">En Curso</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <button class="btn btn-secondary" disabled>Lleno</button>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Basquetbol Juvenil</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Menores</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Eliminación Directa</p>
                <p><strong>Equipos:</strong> 6 / 8</p>
                <p><strong>Inicio:</strong> 5 de Agosto</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Registrando</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-accent">Registrarse</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Bádminton Abierto</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Abierta</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Round Robin</p>
                <p><strong>Participantes:</strong> 10 / 12</p>
                <p><strong>Inicio:</strong> 22 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Registrando</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-accent">Registrarse</a>
            </div>
        </div>

        <div class="tournament-card">
            <div class="tournament-card-header">
                <h3>Futsal Combinado</h3>
                <p style="margin: 0; opacity: 0.9;">Categoría: Abierta</p>
            </div>
            <div class="tournament-card-body">
                <p><strong>Formato:</strong> Grupos y Eliminación</p>
                <p><strong>Equipos:</strong> 8 / 10</p>
                <p><strong>Inicio:</strong> 25 de Julio</p>
                <p><strong>Estado:</strong> <span class="badge badge-primary">Registrando</span></p>
            </div>
            <div class="tournament-card-footer">
                <a href="#" class="btn btn-primary">Ver Detalles</a>
                <a href="#" class="btn btn-accent">Registrarse</a>
            </div>
        </div>
    </div>
@endsection
