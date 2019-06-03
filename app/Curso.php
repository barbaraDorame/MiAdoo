<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function propuesta()
    {
      return $this->belongsTo('App\Propuesta', 'id_propuesta');
    }

    protected $fillable = ['id_propuesta', 'estado'];
}
