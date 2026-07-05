@extends('layouts.app')

@section('title', 'Editar Perfil - Torneoz')

@section('content')
    <div style="max-width: 600px; margin: 2rem auto;">
        <div class="card">
            <h2>Editar Perfil</h2>

            <form method="POST" action="/profile">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ auth()->user()->name }}"
                        required
                    >
                    @error('name')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ auth()->user()->email }}"
                        required
                    >
                    @error('email')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label>Tipo de Usuario</label>
                    <input
                        type="text"
                        value="@if(auth()->user()->isAdmin())Administrador@elseif(auth()->user()->isOrganizer())Organizador@else Participante@endif"
                        disabled
                    >
                    <p style="color: #6b7280; font-size: 0.9rem; margin-top: 0.5rem;">No puedes cambiar tu tipo de usuario</p>
                </div>

                <div style="display: flex; gap: 1rem; margin-top: 2rem;">
                    <button type="submit" class="btn btn-primary" style="flex: 1;">Guardar Cambios</button>
                    <a href="/profile" class="btn btn-secondary" style="flex: 1; text-align: center;">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
