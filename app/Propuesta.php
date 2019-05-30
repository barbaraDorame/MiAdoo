<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propuesta extends Model
{
  protected $fillable = ['correo_instructor', 'nombre', 'departamento',
                         'division', 'tipo_curso', 'contenido', 'contenido_sintetico',
                         'modulos', 'evaluacion', 'documentacion', 'financiamiento',
                         'objetivo_general', 'objetivo_especifico', 'utilidad',
                         'perfil_instructor', 'curriculum_sintetico', 'operacion_curso',
                         'unidad', 'infraestructura', 'estado',
                         'experiencia_instructor', 'curriculum', 'requisitos_alumnos',
                         'duracion_horas', 'exclusividad', 'idioma', 'cupo_maximo',
                         'cupo_minimo', 'fecha_inicio', 'fecha_final'];
}
