<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    //
    protected $fillable = ['nombre', 'especialidad_id'];

    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }

}
