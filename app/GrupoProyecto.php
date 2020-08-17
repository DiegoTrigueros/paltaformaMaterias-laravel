<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoProyecto extends Model
{
    public $table = "grupoproyecto";
    public $incrementing = false;
    protected $primaryKey = "codigoGrupoProyecto";

    public function users(){
        return $this-> hasMany('App\User');
    }
}
