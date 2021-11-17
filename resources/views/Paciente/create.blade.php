@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('CREAR NUEVO PACIENTE') }}</div>
                    <form role="form" name="Form" method="POST" action="{{ route('paciente.store') }}" >

                        {{ csrf_field() }}
                      <div class="row">
                        <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3">
                          <input type="text" name="paterno" class="form-control" placeholder="Paterno">
                        </div>
                        <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="materno" class="form-control" placeholder="Materno">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="date" name="nacimiento" class="form-control" placeholder="Nacimiento">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                          <input type="number" name="edad" class="form-control" placeholder="Edad:" >
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="tutor" class="form-control" placeholder="tutor">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="tutor_edad" class="form-control" placeholder="Nacimiento Tutor">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="facebook" class="form-control" placeholder="Facebook">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="sexo" class="form-control" placeholder="sexo">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="pais" class="form-control" placeholder="Pais">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="estado" class="form-control" placeholder="Estado">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="estado_civil" class="form-control" placeholder="Estado Civil">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="hijos" class="form-control" placeholder="Hijos">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="escolaridad" class="form-control" placeholder="Escolaridad">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="servicio_medico" class="form-control" placeholder="Servicio Medico">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="gastos_medicos" class="form-control" placeholder="gastos medicos">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="comentarios" class="form-control" placeholder="comentarios">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                          <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="intereses" class="form-control" placeholder="intereses">
                        </div>

                          <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3 ">
                          <!-- <input type="text" name="intereses" class="form-control" placeholder="intereses"> -->
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                        </div>



                      </div>
                    </form>
                

                   <!--  {{ __('Bienvenido!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
