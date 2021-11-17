@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('CREAR NUEVO PACIENTE') }}</div>
                    <form>
                      <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name">
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
