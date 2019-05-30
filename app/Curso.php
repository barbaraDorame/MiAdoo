<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function propuesta()
    {
      return $this->hasOne('App\Propuesta', 'id_propuesta');
    }
}
