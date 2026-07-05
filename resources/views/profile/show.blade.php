@extends('layouts.app')

@section('title', 'Mi Perfil - Torneoz')

@section('content')
    <div style="max-width: 700px; margin: 2rem auto;">
        <div class="card">
            <h2>Mi Perfil</h2>

            <div style="background-color: var(--light); padding: 1.5rem; border-radius: 0.5rem; margin-bottom: 1.5rem;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                    <div>
                        <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Nombre</p>
                        <p style="margin: 0; font-weight: 600;">{{ auth()->user()->name }}</p>
                    </div>
                    <div>
                        <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Correo Electrónico</p>
                        <p style="margin: 0; font-weight: 600;">{{ auth()->user()->email }}</p>
                    </div>
                    <div>
                        <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Tipo de Usuario</p>
                        <p style="margin: 0; font-weight: 600;">
                            @if(auth()->user()->isAdmin())
                                <span class="badge badge-primary">Administrador</span>
                            @elseif(auth()->user()->isOrganizer())
                                <span class="badge badge-accent">Organizador</span>
                            @else
                                <span class="badge badge-success">Participante</span>
                            @endif
                        </p>
                    </div>
                    <div>
                        <p style="color: #6b7280; margin: 0 0 0.5rem 0;">Miembro desde</p>
                        <p style="margin: 0; font-weight: 600;">{{ auth()->user()->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
            </div>

            <a href="/profile/edit" class="btn btn-primary">Editar Perfil</a>
        </div>

        <div class="card">
            <h2>Estadísticas</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 1rem;">
                <div style="text-align: center; padding: 1rem;">
                    <h3 style="color: var(--primary); font-size: 2rem; margin: 0;">5</h3>
                    <p style="color: #6b7280; margin: 0.5rem 0 0 0;">Torneos Inscritos</p>
                </div>
                <div style="text-align: center; padding: 1rem;">
                    <h3 style="color: var(--accent); font-size: 2rem; margin: 0;">18</h3>
                    <p style="color: #6b7280; margin: 0.5rem 0 0 0;">Partidos Jugados</p>
                </div>
                <div style="text-align: center; padding: 1rem;">
                    <h3 style="color: var(--success); font-size: 2rem; margin: 0;">12</h3>
                    <p style="color: #6b7280; margin: 0.5rem 0 0 0;">Victorias</p>
                </div>
            </div>
        </div>
    </div>
@endsection
