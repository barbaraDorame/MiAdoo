<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function index()
    {
      $cursos = Curso::search()->orderBy('id')->get();
      return view('admin.cursos.index', ['cursos' => $cursos]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $curso = new Curso;

        $curso->estado = $request->estado;

        $curso->save();
    }

    public function show($id)
    {
      return view('admin.cursos.show', ['curso' => Curso::findOrFail($id)]);
    }

    public function edit($id)
    {
      $curso = Curso::find($id);
      return view('admin.cursos.edit', compact('curso', 'id'));
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);

        $curso->estado = $request->estado;

        $curso->save();
    }

    public function destroy($id)
    {
      $curso = Curso::find($id);
      $curso->delete();
      return view('admin.cursos.index', ['cursos' => $cursos]);
    }
}
