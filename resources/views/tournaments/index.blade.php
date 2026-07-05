@extends('layouts.app')

@section('title', 'Mis Torneos - Torneoz')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
        <h1>Gestión de Torneos</h1>
        <a href="/tournaments/create" class="btn btn-accent">+ Crear Torneo</a>
    </div>

    <div class="card">
        <h2>Torneos Creados</h2>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Formato</th>
                    <th>Equipos</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Futbol Apertura 2026</td>
                    <td><span class="badge badge-primary">Grupos</span></td>
                    <td>12 / 16</td>
                    <td><span class="badge badge-warning">En Preparación</span></td>
                    <td>
                        <a href="/tournaments/1" class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Ver</a>
                        <a href="/tournaments/1/edit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>Torneo de Tenis</td>
                    <td><span class="badge badge-accent">Eliminación</span></td>
                    <td>14 / 16</td>
                    <td><span class="badge badge-primary">Registrando</span></td>
                    <td>
                        <a href="/tournaments/2" class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Ver</a>
                        <a href="/tournaments/2/edit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>Voleibol Femenino</td>
                    <td><span class="badge badge-primary">Round Robin</span></td>
                    <td>8 / 8</td>
                    <td><span class="badge badge-success">En Curso</span></td>
                    <td>
                        <a href="/tournaments/3" class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Ver</a>
                        <a href="/tournaments/3/edit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>Basquetbol Juvenil</td>
                    <td><span class="badge badge-accent">Eliminación</span></td>
                    <td>6 / 8</td>
                    <td><span class="badge badge-primary">Registrando</span></td>
                    <td>
                        <a href="/tournaments/4" class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Ver</a>
                        <a href="/tournaments/4/edit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Editar</a>
                    </td>
                </tr>
                <tr>
                    <td>Futbol Clausura 2025</td>
                    <td><span class="badge badge-primary">Grupos</span></td>
                    <td>14 / 14</td>
                    <td><span class="badge badge-success">Completado</span></td>
                    <td>
                        <a href="/tournaments/5" class="btn btn-primary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Ver</a>
                        <a href="/tournaments/5/edit" class="btn btn-secondary" style="padding: 0.4rem 0.8rem; font-size: 0.9rem;">Editar</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
