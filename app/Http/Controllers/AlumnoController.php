<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Convocatoria;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = Alumno::all();
        $convocatorias = Convocatoria::all();
        return view('alumnos.index', compact('alumnos'));
    }
}
