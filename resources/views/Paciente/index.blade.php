@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header display-4"><strong>{{ __('PACIENTES') }} </strong></div>
                        <a href="{{ route('paciente.create') }}" class="btn btn-dark">
                         <!--  <i
                            class="far fa-add"> </i> -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            CREAR PACIENTE
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
