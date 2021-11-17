@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3>{{$paciente->nombre}} {{$paciente->paterno}} {{$paciente->materno}}</h3></div>
                    
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DATOS DEL PACIENTE</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">PADECIMIENTOS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CITAS</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                                     <form role="form" name="Form" method="POST" action="{{ route('paciente.update', ['paciente'=>$paciente]) }}" >
                                                        {{ method_field('PUT') }}
                                                        {{ csrf_field() }}
                                                      <div class="row">
                                                        <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="nombre" class="form-control" placeholder="Nombre"  value="{{$paciente->nombre}} ">
                                                        </div>
                                                        <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3">
                                                          <input type="text" name="paterno" class="form-control" placeholder="Paterno"  value="{{$paciente->paterno}} ">
                                                        </div>
                                                        <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="materno" class="form-control" placeholder="Materno" value="{{$paciente->materno}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="nacimiento" class="form-control" placeholder="Nacimiento" value="{{$paciente->nacimiento}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                                          <input type="number" name="edad" class="form-control" placeholder="Edad"  value="{{$paciente->edad}}">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="tutor" class="form-control" placeholder="tutor" value="{{$paciente->tutor}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="tutor_nacimiento" class="form-control" placeholder="Nacimiento Tutor" value="{{$paciente->tutor_nacimiento}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="email" class="form-control" placeholder="Email" value="{{$paciente->email}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="{{$paciente->telefono}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="facebook" class="form-control" placeholder="Facebook" value="{{$paciente->facebook}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="sexo" class="form-control" placeholder="sexo" value="{{$paciente->sexo}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="pais" class="form-control" placeholder="Pais" value="{{$paciente->pais}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="estado" class="form-control" placeholder="Estado" value="{{$paciente->estado}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="estado_civil" class="form-control" placeholder="Estado Civil" value="{{$paciente->estado_civil}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="hijos" class="form-control" placeholder="Hijos" value="{{$paciente->hijos}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="Escolaridad" class="form-control" placeholder="Escolaridad" value="{{$paciente->Escolaridad}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" value="{{$paciente->ocupacion}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="servicio_medico" class="form-control" placeholder="Servicio Medico" value="{{$paciente->servicio_medico}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="gastos_medicos" class="form-control" placeholder="gastos medicos" value="{{$paciente->gastos_medicos}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value="{{$paciente->comentarios}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                                          <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value="{{$paciente->recibe_informacion}} ">
                                                        </div>
                                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                                          <input type="text" name="intereses" class="form-control" placeholder="intereses" value="{{$paciente->intereses}} ">
                                                        </div>

                                                          <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3 ">
                                                          <!-- <input type="text" name="intereses" class="form-control" placeholder="intereses"> -->
                                                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                                                        </div>
                                                        
                                                       

                                                      </div>
                                                    </form>
                               

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                          <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value="{{$paciente->recibe_informacion}} ">
                                        </div>
                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                          <input type="text" name="intereses" class="form-control" placeholder="intereses" value="{{$paciente->intereses}} ">
                                        </div>
                                         <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3 ">
                                                          <!-- <input type="text" name="intereses" class="form-control" placeholder="intereses"> -->
                                                            <button type="submit" class="btn btn-primary" disabled>GUARDAR</button>
                                          </div>

                                </div>
                             </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              
                              <div class="row">
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value="{{$paciente->comentarios}} ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value="{{$paciente->recibe_informacion}} ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value="{{$paciente->intereses}} ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3 ">
                                                          <!-- <input type="text" name="intereses" class="form-control" placeholder="intereses"> -->
                                                            <button type="submit" class="btn btn-primary" disabled>GUARDAR</button>
                                                        </div>
                              </div>    
                            </div>
                          </div>
                        <div class="card-body">
                            
                             
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection
