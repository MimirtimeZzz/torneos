<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        return view('tournaments.index');
    }

    public function create()
    {
        return view('tournaments.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:5',
            'format' => 'required|in:grupos,eliminacion,roundrobin',
            'max_teams' => 'required|numeric|min:2',
        ]);

        return redirect('/tournaments')->with('success', 'Torneo creado exitosamente');
    }

    public function show($id)
    {
        return view('tournaments.show', ['tournament' => ['id' => $id]]);
    }

    public function edit($id)
    {
        return view('tournaments.edit', ['tournament' => ['id' => $id]]);
    }
}
