<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function explore()
    {
        return view('participants.explore');
    }

    public function myTournaments()
    {
        return view('participants.my-tournaments');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'tournament_id' => 'required|numeric',
            'team_name' => 'required|min:2',
        ]);

        return back()->with('success', 'Registrado al torneo exitosamente');
    }
}
