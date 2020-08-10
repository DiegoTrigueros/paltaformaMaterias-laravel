<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Materia;
use App\Grupo;
use Carbon\Carbon;
use App\Inscripcion;
use Auth;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = Materia::All();
        $gruposT = Grupo::with('materia')->where('tipo','1')->get();
        $gruposL = Grupo::with('materia')->where('tipo','2')->get();
        return view('pages.inscMaterias', compact('materias','gruposT','gruposL'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $codigoG = $request->input('gTeorico');
        $materias = Grupo::with("materia")->find($codigoG);
        $codigoM = $materias->codigoMateria;
        $codigoS = Auth::user()->codigoUsuario;
        $n = 0;
        $check = DB::select('CALL checkExisting(?, ?, ?)', array($codigoS, $codigoM, $n));
        if($n > 0){
            return redirect(route('inscMaterias'))->with('error',"Ya estás inscrito")->with('codigoM', $codigoM);
        }else{
            $fecha = Carbon::now()->format('Y-m-d');
            $inscripcion = new Inscripcion();
            $inscripcion->codigoEstudiante = $codigoS;
            $inscripcion->codigoGrupo = $codigoG;
            $inscripcion->fechaInscripcion = $fecha;
            $inscripcion->save();   
            return redirect(route('inscMaterias'))->with('success','Materia Inscrita')->with('codigoM', $codigoM);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
