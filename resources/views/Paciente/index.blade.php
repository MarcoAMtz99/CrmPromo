@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('PACIENTES') }}</div>
                        <a href="{{ route('paciente.create') }}" class="btn btn-dark">
                          <i
                            class="far fa-add"> CREAR NUEVO PACIENTE</i>
                        </a>
                       <!-- <img src="{{ asset('img/logo.png') }}" alt=""> -->
                <div class="card-body">
                    <!-- ALERTA PARA MOSTRAR QUE YA SE ELIMINO -->
                                @if (session('error'))
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="p-3 mb-2 bg-danger text-white">
                                                        {{session('error')}}
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                      <div class="table-responsive">

                        <table class="table table-striped table-light" >
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
                                    
                                     <a href="{{ route('paciente.show',$paciente->id) }}" class="btn btn-primary">ver</a>
                                         <form role="form" method="POST" action="{{ route('paciente.destroy',$paciente->id) }}">
                                            @method('DELETE')
                                              @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        
                                          <button type="submit" class="btn btn-danger" role="button" id="butonBorrar">
                                               ELIMINAR
                                             </button>
                                          </form>
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
