<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Materia;
use App\User;
use App\Inscripcion;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user_id = $user->codigoUsuario;
        $info = Inscripcion::With('grupo')->where('codigoEstudiante',$user_id)->get();
        $materias = Materia::all(['codigoMateria', 'Materia']);
        $empleados = User::Where('cargo','Docente')->get();
        return view('home', compact('materias','user','info','empleados'));
    }
}
