<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    public $table = 'inscripcion';
    public $timestamps = false;
    public $incrementing = false;

    public function grupo(){
        return $this->hasOne('App\Grupo','codigoGrupo','codigoGrupo');
    }
}
