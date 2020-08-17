<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Grupo;
use Auth;

class GruposProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::User()->codigoUsuario;
        $grupos = GRUPO::With('materia')->where('codigoEmpleado',$user_id)->get();
        $grupos = $grupos->unique('codigoMateria');
        return view('pages.gruposP', compact('grupos'));
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
        //
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

    /**
     * Get groups for each subject
     * 
     * @return json
     */
    public function getGroups()
    {
        $codigoMateria = $_GET['codigoMateria'];
        $gruposMateria = GRUPO::Where('codigoMateria',$codigoMateria)->get();
        return response()->json(['grupos' => $gruposMateria]);
    }

    /**
     * Get project groups for each group
     * 
     * @return json
     */
    public function getProjectGroups(){
        $codMateria = $_GET['codigoMateria'];
        $codigoGrupo = $_GET['codigoGupo'];
        $gruposProyecto = GrouposProyecto::With('users')->where('codigoGrupo',$codigoGrupo);
        return response()->json(['gruposProyecto' => $gruposMateria]);
    }
}
