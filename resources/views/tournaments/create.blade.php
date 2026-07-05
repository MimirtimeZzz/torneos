@extends('layouts.app')

@section('title', 'Crear Torneo - Torneoz')

@section('content')
    <div style="max-width: 700px; margin: 2rem auto;">
        <div class="card">
            <h2>Crear Nuevo Torneo</h2>

            <form method="POST" action="/tournaments">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre del Torneo</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Ej: Futbol Apertura 2026"
                        value="{{ old('name') }}"
                        required
                    >
                    @error('name')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea
                        id="description"
                        name="description"
                        placeholder="Describe el torneo, reglas, categoría, etc."
                        required
                    >{{ old('description') }}</textarea>
                    @error('description')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="format">Formato del Torneo</label>
                    <select id="format" name="format" required>
                        <option value="">-- Selecciona un formato --</option>
                        <option value="grupos" {{ old('format') === 'grupos' ? 'selected' : '' }}>Grupos y Eliminación</option>
                        <option value="eliminacion" {{ old('format') === 'eliminacion' ? 'selected' : '' }}>Eliminación Directa</option>
                        <option value="roundrobin" {{ old('format') === 'roundrobin' ? 'selected' : '' }}>Round Robin</option>
                    </select>
                    @error('format')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="max_teams">Máximo de Equipos</label>
                    <input
                        type="number"
                        id="max_teams"
                        name="max_teams"
                        placeholder="Ej: 16"
                        value="{{ old('max_teams') }}"
                        min="2"
                        required
                    >
                    @error('max_teams')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-accent" style="flex: 1;">Crear Torneo</button>
                    <a href="/tournaments" class="btn btn-secondary" style="flex: 1; text-align: center;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
