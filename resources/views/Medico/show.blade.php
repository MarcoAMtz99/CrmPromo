@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h3>{{$medico->nombre}} {{$medico->paterno}} {{$medico->materno}}</h3></div>
                    
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">GENERAL</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="CONSULTORIOS-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CONSULTORIOS</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="MEDIOSC-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MEDIOS DE CONTACTO</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="EXPERIENCIA-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">EXPERIENCIA PROFESIONAL</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="CURRICULUM-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CURRICULUM</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="MEDIOSD-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">MEDIOS DIGITALES</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="ARCHIVOS-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">ARCHIVOS</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="FACTURACION-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">FACTURACION</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                               
                                     <form role="form" name="Form" method="POST" action="{{ route('medico.update', ['medico'=>$medico]) }}" >
                                                        {{ method_field('PUT') }}
                                                        {{ csrf_field() }}
                                                      <div class="row">
                                                        <div class="col-xl-5 col-md-5 col-sm-10 p-2 m-3">
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->nombre}} {{$medico->paterno}} {{$medico->materno}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Nombre</span>
                                                                </div>
                                                              </div>
                                                        </div>
                                                         <div class="col-xl-5 col-md-5 col-sm-10 p-2 m-3">
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->nacimiento_fecha}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Nacimiento</span>
                                                                </div>
                                                              </div>
                                                        </div>
                                                         <div class="col-xl-5 col-md-5 col-sm-10 p-2 m-3">
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->nacionalidad ==1 ? 'MEXICANA' : 'OTRA'}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Nacionalidad</span>
                                                                </div>
                                                              </div>
                                                        </div>
                                                         <div class="col-xl-5 col-md-5 col-sm-10 p-2 m-3">
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->rfc}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Rfc</span>
                                                                </div>
                                                              </div>
                                                        </div>
                                                        <hr>
                                                          <div class="col-xl-5 col-md-5 col-sm-10 p-2 m-3">
                                                             <h4>Datos</h4>
                                                            <div class="dropdown-divider"></div>
                                                           
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->rfc}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Rfc</span>
                                                                </div>
                                                              </div>
                                                               <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->nacimiento_lugar}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Lugar de nacimiento</span>
                                                                </div>
                                                              </div>
                                                               <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->calle}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Calle</span>
                                                                </div>
                                                              </div>
                                                               <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->num_exterior}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Numero Exterior</span>
                                                                </div>
                                                              </div>
                                                                <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->num_interior}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Numero Interior</span>
                                                                </div>
                                                              </div>
                                                                <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->num_piso}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Numero de Piso</span>
                                                                </div>
                                                              </div>
                                                                <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->id_cp}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">CP</span>
                                                                </div>
                                                              </div>
                                                                <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->giro}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Giro</span>
                                                                </div>
                                                              </div>
                                                                <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value=" {{$medico->slogan}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Slogan</span>
                                                                </div>
                                                              </div>
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value=" {{$medico->medios_digitales ==1? 'SI':'NO'}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Medios Digitales</span>
                                                                </div>
                                                              </div>
                                                              <div class="input-group mb-3">
                                                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2"
                                                                value="{{$medico->status ==1 ? 'ACTIVO':'INACTIVO'}}" readonly>
                                                                <div class="input-group-append" >
                                                                  <span class="input-group-text" id="basic-addon2">Estatus</span>
                                                                </div>
                                                              </div>
          
                                                        </div>
                                                      <div class="col-xl-3 col-md-6 col-sm-10 p-2 m-3">
                                                        <div class="card">
                                                          <img src="{{ asset('img/logo_small.png') }}" class="card-img-top" alt="...">
                                                          <div class="card-body">
                                                            <h5 class="card-title">FOTOGRAFIA</h5>
                                                            <p class="card-text"></p>
                                                            
                                                                <div class="input-group">
                                                                  <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                                    <label class="custom-file-label" for="inputGroupFile04">Buscar Imagen</label>
                                                                  </div>
                                                                  <div class="input-group-append">
                                                                    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Subir</button>
                                                                  </div>
                                                                </div>
                                                          </div>
                                                         </div>
                                                         </div>
                                                    
                                                    
                                                 
                                                                                                                  
                                                      </div>
                                                      <div class="row">
                                                          <div class="col-xl-5 col-md-6 col-sm-10  p-2 m-3 ">
                                                         
                                                            <button type="submit" class="btn btn-primary" disabled>Editar</button>
                                                        </div>
                                                      </div>
                                                      <div class="row">
                                                          


                                                      </div>
                                                    </form>
                               

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="CONSULTORIOS-tab">
                              <P class="display-4">CONSULTORIOS</P>
                                <div class="row">
                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                          <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                        </div>
                                         <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                          <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
                                        </div>
                                         <div class="col-xl-5 col-md-6 col-sm-12  p-2 m-3 ">
                                                       
                                                            <button type="submit" class="btn btn-primary" disabled>GUARDAR</button>
                                          </div>

                                </div>
                             </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                              
                              <div class="row">
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
                                        <input type="text" name="comentarios" class="form-control" placeholder="comentarios" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3 ">
                                        <input type="text" name="recibe_informacion" class="form-control" placeholder="Recibe Informacion" value=" ">
                                      </div>
                                       <div class="col-xl-5 col-md-6 col-sm-12 p-2 m-3">
                                        <input type="text" name="intereses" class="form-control" placeholder="intereses" value=" ">
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
