@extends('layouts.app')

@section('content')
<div class="container-fluid full-height">
    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header ">{{ __('Bienvenido') }}</div>
                   <div class="col-12">
                       <img src="{{ asset('img/logo.png') }}" alt="" class="col-12">
                   </div>
                       
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <!--  <h4>{{ __('Bienvenido!') }}</h4> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
