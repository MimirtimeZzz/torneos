<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->isAdmin()) {
            return view('dashboard.admin');
        } elseif ($user->isOrganizer()) {
            return view('dashboard.organizer');
        } else {
            return view('dashboard.participant');
        }
    }
}
