@extends('layouts.app')

@section('title', 'Registrarse - Torneoz')

@section('content')
    <div style="max-width: 500px; margin: 2rem auto;">
        <div class="card">
            <h2 style="text-align: center; margin-bottom: 2rem;">Crear Cuenta en Torneoz</h2>

            <form method="POST" action="/register">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre Completo</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
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
                        value="{{ old('email') }}"
                        required
                    >
                    @error('email')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="role">Tipo de Usuario</label>
                    <select id="role" name="role" required>
                        <option value="">-- Selecciona --</option>
                        <option value="participante" {{ old('role') === 'participante' ? 'selected' : '' }}>Participante</option>
                        <option value="organizador" {{ old('role') === 'organizador' ? 'selected' : '' }}>Organizador</option>
                    </select>
                    @error('role')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                    >
                    @error('password')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        required
                    >
                </div>

                <button type="submit" class="btn btn-accent" style="width: 100%;">Registrarse</button>
            </form>

            <p style="text-align: center; margin-top: 1.5rem;">
                ¿Ya tienes cuenta?
                <a href="/login" style="color: var(--primary); text-decoration: none; font-weight: 600;">Inicia sesión</a>
            </p>
        </div>
    </div>
@endsection
