<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicacionesController extends Controller
{
    public function index(Request $request): View
    {
        return view('publicaciones.index');
    }
}
