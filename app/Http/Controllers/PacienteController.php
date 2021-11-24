<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Carbon\Carbon;
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pacientes = Paciente::all();

        return view('Paciente.index',['pacientes'=> $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Paciente.create');
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
        $paciente=new Paciente([
                'nombre'=>$request->nombre,
                'materno'=>$request->materno,
                'paterno'=>$request->paterno,
                'edad'=>$request->edad,
                'nacimiento'=>$request->nacimiento,
                'tutor'=>$request->tutor,
                'tutor_nacimiento'=>$request->tutor_edad,
                'tutor_edad'=>$request->tutor_edad,
                'email'=>$request->email,
                'telefono'=>$request->telefono,
                'password'=>'secret',
                'facebook'=>$request->facebook,
                'sexo'=>$request->sexo,
                'pais'=>$request->pais,
                'estado'=>$request->estado,
                'estado_civil'=>$request->estado_civil,
                'hijos'=>$request->hijos,
                'escolaridad'=>$request->escolaridad,
                'ocupacion'=>$request->ocupacion,
                'servicio_medico'=>$request->servicio_medico,
                'gastos_medicos'=>$request->gastos_medicos,
                'comentarios'=>$request->comentarios,
                'recibe_informacion'=>$request->recibe_informacion,
                'intereses'=>$request->intereses,
                'status'=>1,


            ]);
        $paciente->save();
        return redirect()->route('paciente.index')->with('error',"PACIENTE CREADO");;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
        // $pac = Paciente::where('id',$paciente->id)->get();
        // dd($pac,$paciente);
        return view('Paciente.show',['paciente'=> $paciente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
        $temp = Paciente::find($paciente->id);
        $temp->update($request->all());
        return redirect()->route('paciente.index');
        // return json_encode([$request->nombre,$paciente]);
        // 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
      $pacientes = Paciente::all();
       $paciente->delete();
       // dd($pacientes);,['pacientes'=> $pacientes,
       // 'msg'=>"PACIENTE ELIMINADO"]
       return redirect()->back()->with('error',"PACIENTE ELIMINADO");
    }
}
