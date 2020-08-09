<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public $table = "materia";
    protected $primaryKey = 'codigoMateria';
    public $incrementing = false; 
    
    public function grupo(){
        return $this->hasMany(Grupo::class,'codigoMateria','codigoMateria');
    }
}
