@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('PACIENTES') }}</div>
                        <a href="" class="btn btn-dark"> CREAR NUEVO PACIENTE</a>
                       <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
                <div class="card-body">
                      <div class="table-responsive">

                        <table class="table table-striped table-light">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Correo</th>
                                  <th scope="col">Edad</th>
                                  <th scope="col">Telefono</th>
                                  <th scope="col">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($pacientes as $paciente)
                                <tr>
                                  <!-- <th scope="row">1</th> -->
                                  <td>{{$paciente->id}}</td>
                                  <td>{{$paciente->nombre}} {{$paciente->paterno}} {{$paciente->materno}} </td>
                                  <td>{{$paciente->email}}</td>
                                   <td>{{$paciente->edad}}</td>
                                    <td>{{$paciente->telefono}}</td>
                                     <td>
                                        <a href="#" class="btn btn-info">Editar</a>
                                         <a href="#" class="btn btn-primary">ver</a>
                                          <a href="#" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                         </table>

                          </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
