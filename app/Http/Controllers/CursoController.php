<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
      $cursos = Curso::all();
      return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      dump($request);

        $request->validate([
          'id_propuesta' => 'required',
          'estado' => [
              'required',
              Rule::in(['Aprobado', 'Desaprobado', 'En espera']),
          ],
        ]);
        //dump($request);
        $curso = new Curso;
        $curso->fill($request->all());
        $curso->save();
        return redirect()->action('CursoController@index');
    }

    public function show($id)
    {
      //
    }

    public function edit($id)
    {
      //
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        $request->validate([
          'estado' => [
              'required',
              Rule::in(['Aprobado', 'Desaprobado', 'En espera']),
          ],
        ]);
        $curso = Curso::find($id);
        $curso->fill($request->all());
        $curso->save();
        return redirect()->action('CursoController@index');
    }

    public function destroy($id)
    {
      $curso = Curso::find($id);
      $curso->delete();
      return redirect()->action('CursoController@index');
    }
}
