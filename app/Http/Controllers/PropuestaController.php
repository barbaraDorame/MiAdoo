<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Propuesta;

class PropuestaController extends Controller
{
    public function index()
    {
        $propuestas = Propuesta::all();
        return view('propuestas.index', compact('propuestas'));
    }

    public function create()
    {
        return view('propuestas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'string|required',
            'correo_instructor' => 'string|required',
            'departamento' => 'string|required',
            'division' => 'string|required',
            'contenido' => 'string|required',
            'contenido_sintetico' => 'string|required',
            'modulos' => 'string|required',
            'evaluacion' => 'string|required',
            'documentacion' => 'string|required',
            'objetivo_general' => 'string|required',
            'objetivo_especifico' => 'string|required',
            'utilidad' => 'string|required',
            'experiencia_instructor' => 'string|required',
            //'curriculum' => 'file|required',
            'requisitos_alumnos' => 'string|required',
            'duracion_horas' => 'numeric|required|min:1',
            'financiamiento' => 'string|required',
            'perfil_instructor' => 'string|required',
            'curriculum_sintetico' => 'string|required',
            'operacion_curso' => 'string|required',
            'unidad' => 'string|required',
            'infraestructura' => 'string|required',
            'cupo_minimo' => 'numeric|required|min:1',
            'cupo_maximo' => 'numeric|required|min:1',
            'fecha_inicio' => 'date|required',
            'fecha_final' => 'date|required',
            'tipo_curso' => [
                'required',
                Rule::in(['Obligatoria', 'Optativa']),
            ],
            'exclusividad' => [
                'required',
                Rule::in(['Abierto', 'Exclusivo']),
            ],
            'idioma' => [
                'required',
                Rule::in(['es', 'en']),
            ],
        ]);

        $propuesta = new Propuesta;

        $propuesta->fill($request->all());

        $propuesta->save();
        return redirect()->action('PropuestaController@index');
    }

    public function show($id)
    {
        return view('propuestas.show');
    }

    public function edit($id)
    {
        $propuesta = Propuesta::find($id);
        return view('propuestas.edit', compact('propuesta', 'id'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|required',
            'correo_instructor' => 'string|required',
            'departamento' => 'string|required',
            'division' => 'string|required',
            'contenido' => 'string|required',
            'contenido_sintetico' => 'string|required',
            'modulos' => 'string|required',
            'evaluacion' => 'string|required',
            'documentacion' => 'string|required',
            'objetivo_general' => 'string|required',
            'objetivo_especifico' => 'string|required',
            'utilidad' => 'string|required',
            'experiencia_instructor' => 'string|required',
            'curriculum' => 'file',
            'requisitos_alumnos' => 'string|required',
            'duracion_horas' => 'numeric|required|min:1',
            'financiamiento' => 'string|required',
            'perfil_instructor' => 'string|required',
            'curriculum_sintetico' => 'string|required',
            'operacion_curso' => 'string|required',
            'unidad' => 'string|required',
            'infraestructura' => 'string|required',
            'cupo_minimo' => 'numeric|required|min:1',
            'cupo_maximo' => 'numeric|required|min:1',
            'fecha_inicio' => 'date|required',
            'fecha_final' => 'date|required',
            'tipo_curso' => [
                'required',
                Rule::in(['Obligatoria', 'Optativa']),
            ],
            'exclusividad' => [
                'required',
                Rule::in(['Abierto', 'Exclusivo']),
            ],
            'idioma' => [
                'required',
                Rule::in(['es', 'en']),
            ],
        ]);

        $propuesta = Propuesta::find($id);

        $propuesta->fill($request->all());

        $propuesta->save();
        return redirect()->action('PropuestaController@index');
    }

    public function destroy($id)
    {
        $propuesta = Propuesta::find($id);
        $propuesta->delete();
        return redirect()->action('PropuestaController@index');
    }
}
