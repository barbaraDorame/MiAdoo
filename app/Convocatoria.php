<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocatoria extends Model
{
    public function curso()
    {
      return $this->belongsTo('App\Curso', 'id_curso');
    }
}
