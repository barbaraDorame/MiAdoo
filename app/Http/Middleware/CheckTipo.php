<?php

namespace App\Http\Middleware;

use Closure;

class CheckTipo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (!auth()->user()){
            return redirect('/')->with('error', 'No tienes permiso de acceder');
        } elseif (in_array(auth()->user()->tipo, $roles)){
            return $next($request);
        } elseif (auth()->user()->tipo == 'Instructor'){
            return redirect('/');
        } elseif (auth()->user()->tipo == 'Responsable'){
            return redirect('/');
        } elseif (auth()->user()->tipo == 'Alumno'){
            return redirect('/');
        } elseif (auth()->user()->tipo == 'Division'){
            return redirect('/');
        }
        return redirect('/')->with('error', 'No tienes permiso de acceder');
    }
}
