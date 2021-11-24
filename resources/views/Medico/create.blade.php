@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('CREAR NUEVO MEDICO') }}</div>
                    <form role="form" name="Form" method="POST" action="{{ route('medico.store') }}" >

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
                      
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="nacionalidad" class="form-control" placeholder="nacionalidad">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="nacimiento_lugar" class="form-control" placeholder="Lugar de Nacimiento ">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="rfc" class="form-control" placeholder="rfc">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="calle" class="form-control" placeholder="calle">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="num_exterior" class="form-control" placeholder="num_exterior">
                        </div>
                           <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                          <input type="number" name="num_interior" class="form-control" placeholder="num_interior" >
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="sexo" class="form-control" placeholder="sexo">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="num_piso" class="form-control" placeholder="num_piso">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="cp" class="form-control" placeholder="cp">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="fotografia" class="form-control" placeholder="fotografia">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="num_cedula" class="form-control" placeholder="Cedula">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="tipoMedico" class="form-control" placeholder="tipoMedico">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="giro" class="form-control" placeholder="giro">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="slogan" class="form-control" placeholder="slogan">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="medios_digitales" class="form-control" placeholder="medios_digitales">
                        </div>
                       <!--   <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="comentarios" class="form-control" placeholder="comentarios">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                          <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion">
                        </div>
                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                          <input type="text" name="intereses" class="form-control" placeholder="intereses">
                        </div> -->

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
