<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    public $table = "grupo";
    public $incrementing = false;
    protected $primaryKey = "codigoGrupo";

    public function materia(){
        return $this->belongsTo(Materia::class,'codigoMateria','codigoMateria');
    }
}
