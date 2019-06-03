<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function propuesta()
    {
      return $this->belongsTo('App\Propuesta', 'id_propuesta');
    }

    public function convocatoria() {
        return $this->hasOne('App\Convocatoria', 'id_curso');
    }

    protected $fillable = ['id_propuesta', 'estado'];
}
