<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        // Logique pour la page Tracking
        return view('tracking');
    }
}
