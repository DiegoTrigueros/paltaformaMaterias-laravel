<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoProyecto extends Model
{
    public $table = "grupoproyecto";
    public $incrementing = false;
    protected $primaryKey = "codigoGrupoProyecto";
}
