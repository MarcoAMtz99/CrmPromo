<?php

namespace App\Http\Controllers;

use App\Medico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Carbon\Carbon;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicos = Medico::all();
        $aux = session();
        $usuario= Auth::user();
        return view('Medico.index',['medicos'=> $medicos,'auth'=>$aux,'USUARIO'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('Medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $usuario = Auth::user();
            // dd($request->all());
             $Medico = new Medico ( [ 

             'nombre'=>$request->nombre,
             'paterno'=>$request->paterno,
             'materno'=>$request->materno,
             'nacimiento'=>$request->nacimiento,
             'nacionalidad'=>$request->nacionalidad,
             'nacimiento_fecha'=>$request->nacimiento,
             'nacimiento_lugar'=>$request->nacimiento_lugar,
             'rfc'=>$request->rfc,
             'calle'=>$request->calle,
             'num_exterior'=>$request->num_exterior,
             'num_interior'=>$request->num_interior,
             'sexo'=>$request->sexo,
             'num_piso'=>$request->num_piso,
             'id_cp'=>$request->cp,
             'fotografia'=>$request->fotografia,
             'num_cedula'=>$request->num_cedula,
             'tipoMedico'=>$request->tipoMedico,
             'giro'=>$request->giro,
             'slogan'=>$request->slogan,
             "usuario_id"=>$usuario->id,
             "usuario_update_id"=>$usuario->id,
             'medios_digitales'=>$request->medios_digitales,
             "servicios"=>0,
             "archivos"=>"",
             "video"=>"",
             "fecha_recer"=>"",
             "num_recer"=>0,
             "status"=>1,
             "id_grupo"=>0
         ]);
             
         $Medico->save();
         return redirect()->route('medico.index')->with('error',"MEDICO CREADO");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
         return view('Medico.show',['medico'=> $medico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(Medico $medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medico $medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
