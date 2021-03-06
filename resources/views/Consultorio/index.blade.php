 
    <!--    <div class="row">
         
       </div> -->
         <div class="row">
            <div id="cons-tbl" class="col-xl-10 col-md-10 col-sm-9 p-2 m-3">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">GENERAL</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="Horarios-tab" data-toggle="tab" href="#Horarios" role="tab" aria-controls="Horarios" aria-selected="false">Horarios de atencion</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="Servicios-tab" data-toggle="tab" href="#Servicios" role="tab" aria-controls="Servicios" aria-selected="false">Servicios</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="Promociones-tab" data-toggle="tab" href="#Promociones" role="tab" aria-controls="Promociones" aria-selected="false">Promociones</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="Cubiculos-tab" data-toggle="tab" href="#Cubiculos" role="tab" aria-controls="Cubiculos" aria-selected="false">Cubiculos</a>
                            </li>
                             <li class="nav-item">
                              <a class="nav-link" id="staff-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="staff" aria-selected="false">Staff Medicos</a>
                            </li>
                           
                     </ul>
                </div>
         
         </div>
           <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="row">
                                            <div class="table-responsive">
                                                          <div id="cons-tbl" class="col-xl-10 col-md-10 col-sm-9 p-2 m-3">
                                                            <table id="tbl-cons" class="table table-striped jambo_table">
                                                              <thead>
                                                                <th>Nombre del Consultorio</th>
                                                                <th>Primer Consulta</th>
                                                                <th>Subsecuente</th>
                                                                <th>Preferente</th>
                                                                <th>
                                                               
                                                                  <button id="btnAddCons" type="button" class="btn btn-xs btn-default"><i class="fa fa-plus"></i> Agregar</button>
                                                                
                                                                </th>
                                                              </thead>
                                                              <tbody>
                                                              </tbody>
                                                            </table>
                                                          </div>
                                                 </div>
                                    </div>
                                    <div class="row">
                                          <div class="col-xl-10 col-md-10 col-sm-12 p-2 m-3">
                                            <span class="">Datos del Consultorio</span>

                                            <form class="form-horizontal form-label-left">
                                              <div class="form-group">
                                                <label class="" for="cons-nom">Nombre</label>
                                                <div class="">
                                                  <input type="text" id="cons-nom" class="form-control" placeholder="Nombre del Consultorio">
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="" for="cons-prim">Consulta Primera Vez</label>
                                                <div class="">
                                                  <input type="text" id="cons-prim" class="form-control " placeholder="Costo">
                                                  <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="" for="cons-sub">Consulta Subsecuente</label>
                                                <div class="">
                                                  <input type="text" id="cons-sub" class="form-control " placeholder="Costo">
                                                  <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="" for="cons-pref">Consulta Preferente</label>
                                                <div class="">
                                                  <input type="text" id="cons-pref" class="form-control " placeholder="Costo">
                                                  <span class="" aria-hidden="true"></span>
                                                </div>
                                              </div>
                                              
                                             
                                              <div class="form-group">
                                                <div class="">
                                                  <input type="hidden" id="cons-id" value="0">
                                                  <button id="btnSaveCons" type="button" class="btn btn-sm btn-primary"><i class="fa fa-check"></i> Guardar Datos</button>
                                                </div>
                                              </div>
                                            
                                            </form>
                                          </div>

                                      
                                      
                                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                            <span class="section">Direcci??n</span>

                                            <form class="form-horizontal form-label-left">

                                              <div class="form-group">
                                                <label class="" for="cons-calle">Calle 
                                                </label>
                                                <div class="">
                                                  <input type="text" id="cons-calle" required="required" class="form-control" placeholder="Nombre de la calle">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label for="cons-ext" class="">No. Ext.</label>
                                                <div class="">
                                                  <input id="cons-ext" class="form-control" type="text" placeholder="N??mero Exterior">
                                                </div>
                                                <label for="cons-int" class="">No. Int.</label>
                                                <div class="">
                                                  <input id="cons-int" class="form-control" type="text" placeholder="N??mero Interior">
                                                </div>
                                                <label for="cons-cp" class="">C. P.</label>
                                                <div class="">
                                                  <input id="cons-cp" class="form-control" type="text" data-inputmask="'mask' : '99999'" placeholder="C??digo Postal">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label for="cons-col" class="">Colonia</label>
                                                <div class="">
                                                  <select id="cons-col" class="select2_single form-control" tabindex="-1" style="width: 100%">
                                                  </select>
                                                </div>
                                                <label for="cons-mun" class="control-label">Municipio</label>
                                                <div class="">
                                                  <input id="cons-mun" class="form-control" type="text" placeholder="Delegaci??n / Municipio">
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label for="cons-ciu" class="">Ciudad</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>

                                            </form>
                                          </div>
                                        </div>  
                            



                     </div>
                        <div class="tab-pane fade" id="Servicios" role="tabpanel" aria-labelledby="Servicios-tab">
                              
                              <div class="row">
                                <h4>SERVICIOS</h4>
                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                       <div class="form-group">
                                                <label for="cons-ciu" class="">Ciudad</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>  
                                 </div>   
                              </div>    
                            </div>
                         <div class="tab-pane fade" id="Horarios" role="tabpanel" aria-labelledby="Horarios-tab">
                              
                              <div class="row">
                                <h4>HORARIOS</h4>
                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                       <div class="form-group">
                                                <label for="cons-ciu" class="">HORAS</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>  
                                 </div>   
                              </div>    
                            </div>
                             <div class="tab-pane fade" id="Promociones" role="tabpanel" aria-labelledby="Promociones-tab">
                              
                              <div class="row">
                                <h4>PROMOCIONES</h4>
                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                       <div class="form-group">
                                                <label for="cons-ciu" class="">Ciudad</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>  
                                 </div>   
                              </div>    
                            </div>
                                  <div class="tab-pane fade" id="Cubiculos" role="tabpanel" aria-labelledby="Cubiculos-tab">
                              
                              <div class="row">
                                <h4>CUBICULOS</h4>
                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                       <div class="form-group">
                                                <label for="cons-ciu" class="">HORAS</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>  
                                 </div>   
                              </div>    
                            </div>
                                  <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="staff-tab">
                              
                              <div class="row">
                                <h4>STAFF</h4>
                                <div class="col-xl-10 col-md-10 col-sm-12 ">
                                       <div class="form-group">
                                                <label for="cons-ciu" class="">HORAS</label>
                                                <div class="">
                                                  <input id="cons-ciu" class="form-control" type="text" placeholder="Ciudad">
                                                </div>
                                                <label for="cons-edo" class="">Estado</label>
                                                <div class="">
                                                  <input id="cons-edo" class="form-control" type="text" placeholder="Estado">
                                                </div>
                                              </div>  
                                 </div>   
                              </div>    
                            </div>


  </div> 
  <!-- FIN DEL TAB CONTENT ESTE CONTENEDOR CAMBIA EL CONTENDIO DENTRO DE LOS TAB LIST -->
                    