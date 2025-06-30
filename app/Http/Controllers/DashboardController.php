<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (!$user || $user->role !== 'directeur') {
            // Redirige vers la page d'accueil si pas autorisé
            return redirect('/');
        }

        return view('dashboard');
    }
}
