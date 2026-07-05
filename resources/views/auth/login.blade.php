@extends('layouts.app')

@section('title', 'Ingresar - Torneoz')

@section('content')
    <div style="max-width: 400px; margin: 2rem auto;">
        <div class="card">
            <h2 style="text-align: center; margin-bottom: 2rem;">Ingresar a Torneoz</h2>

            <form method="POST" action="/login">
                @csrf

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
                    <label for="password">Contraseña</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        required
                    >
                    @error('password')<span style="color: var(--danger); font-size: 0.9rem;">{{ $message }}</span>@enderror
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%;">Ingresar</button>
            </form>

            <p style="text-align: center; margin-top: 1.5rem;">
                ¿No tienes cuenta?
                <a href="/register" style="color: var(--primary); text-decoration: none; font-weight: 600;">Regístrate aquí</a>
            </p>
        </div>
    </div>
@endsection
