@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header display-4"><strong>{{ __('MEDICOS') }}</strong></div>
                   
                          <a href="{{ route('medico.create') }}" class="btn btn-dark">
                         <!--  <i
                            class="far fa-add"> </i> -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            CREAR MEDICO
                        </a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <!-- TRABLE DE MEDICOS -->

                        <div class="table-responsive">

                        <table class="table table-striped table-dark" >
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Cedula</th>
                                  <th scope="col">Rfc</th>
                                  <th scope="col">Consultorio</th>
                                  <th scope="col">Status</th>
                                  <th scope="col">Acciones</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($medicos as $medico)
                                @if(isset($medico))
                                <tr>
                                  <!-- <th scope="row">1</th> -->
                                  <td>{{$medico->id}}
                                     <div class="rounded-circle  rounded" width="45" height="45">
                                            <img src="{{ asset('img/logo_small.png') }}"  width="55" height="55" class="rounded-circle " alt="..." >
                                          </div>  
                                  </td>
                                  <td>{{$medico->nombre}} {{$medico->paterno}} {{$medico->materno}} </td>
                                  <td>{{$medico->rfc}}</td>
                                   <td>{{$medico->edad}}</td>
                                    <td>{{$medico->status}}</td>
                                    <td>{{$medico->status}}</td>
                                     <td>
                                    
                                     <a href="{{ route('medico.show',$medico->id) }}" class="btn btn-primary">ver</a>
                                         <form role="form" method="POST" action="{{ route('medico.destroy',$medico->id) }}">
                                            @method('DELETE')
                                              @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        
                                          <button type="submit" class="btn btn-danger" role="button" id="butonBorrar">
                                               ELIMINAR
                                             </button>
                                          </form>
                                    </td>
                                </tr>
                                @endif

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
