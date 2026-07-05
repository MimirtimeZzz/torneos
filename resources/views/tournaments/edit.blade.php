@extends('layouts.app')

@section('title', 'Editar Torneo - Torneoz')

@section('content')
    <div style="max-width: 700px; margin: 2rem auto;">
        <div class="card">
            <h2>Editar Torneo</h2>

            <form method="POST" action="/tournaments/{{ $tournament['id'] }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nombre del Torneo</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="Futbol Apertura 2026"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea
                        id="description"
                        name="description"
                        required
                    >Torneo de futbol masculino en categoría mayores. Se jugará bajo las reglas de la FIFA con árbitros certificados.</textarea>
                </div>

                <div class="form-group">
                    <label for="format">Formato del Torneo</label>
                    <select id="format" name="format" required>
                        <option value="grupos" selected>Grupos y Eliminación</option>
                        <option value="eliminacion">Eliminación Directa</option>
                        <option value="roundrobin">Round Robin</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="max_teams">Máximo de Equipos</label>
                    <input
                        type="number"
                        id="max_teams"
                        name="max_teams"
                        value="16"
                        min="2"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="status">Estado</label>
                    <select id="status" name="status">
                        <option value="preparacion" selected>En Preparación</option>
                        <option value="registrando">Registrando</option>
                        <option value="curso">En Curso</option>
                        <option value="completado">Completado</option>
                    </select>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-accent" style="flex: 1;">Guardar Cambios</button>
                    <a href="/tournaments/{{ $tournament['id'] }}" class="btn btn-secondary" style="flex: 1; text-align: center;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
