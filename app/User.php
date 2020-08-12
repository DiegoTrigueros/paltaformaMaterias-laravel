<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombresUsuario', 'codigoUsuario', 'password', 'apellidosUsuario', 'edadUsuario', 'telefonoUsuario',
        'cargo', 'imagenPerfil',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $table = 'usuario';
    public $timestamps = false;
    protected $primaryKey = 'codigoUsuario';
    public $incrementing = false; 

    public function grupos(){
        return $this->belongsToMany('App\Grupo');
    }
}
