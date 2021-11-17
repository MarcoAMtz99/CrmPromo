@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                  <div class="row">
            <div id="calendar" class="col-xl-8 col-md-6 col-sm-12 "></div>
                 <div class="col-xl-4 col-md-6 col-sm-12 bg-dark text-white">
                    <!-- <div id="calendarioWeb2"></div> -->
                   
                    <div class="col-12">
                        <div class="card text-center">
                            <h5 class="card-title text-dark mt-10">INFO PACIENTES</h5>
                          <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#">Informacion</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#">Historial Medico</a>
                              </li>
                               <li class="nav-item">
                                <a class="nav-link" href="#">Tareas del Medico</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link disabled" href="#">Confirmar Cita</a>
                              </li>
                            </ul>
                          </div>
                          <div class="card-body bg-dark">
                             <div class="col-12">
                                <div class="form-group">
                            <label for="formGroupExampleInput" >Paciente</label>
                            <input type="text" class="form-control bg-light" id="formGroupExampleInput" placeholder="Paciente">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Primera cita</label>
                            <input type="text" value="NO"class="form-control bg-light" id="formGroupExampleInput2" placeholder="Another input placeholder">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Segunda cita</label>
                            <input type="text" value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Another input placeholder">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Tercera cita</label>
                            <input type="text"  value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Another input placeholder">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Cuarta cita</label>
                            <input type="text" value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Another input placeholder">
                          </div>
                        </div>

                        <!-- SEGUNDA COLUMNA EN LA PARTE DE LA AGENDA -->
                            <div class="col-12">
                                <div class="form-group">
                            <label for="formGroupExampleInput" >Aseguradora</label>
                            <input type="text" class="form-control bg-light" id="formGroupExampleInput" placeholder="Primera cita">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Medico</label>
                            <input type="text" value="NO"class="form-control bg-light" id="formGroupExampleInput2" placeholder="Medico">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Empresa</label>
                            <input type="text" value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Empresa">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Referido</label>
                            <input type="text"  value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Referido">
                          </div>
                          <div class="form-group">
                            <label for="formGroupExampleInput2" >Consultorio</label>
                            <input type="text" value="NO" class="form-control bg-light" id="formGroupExampleInput2" placeholder="Consultorio">
                          </div>
                        </div>




                          </div>
                        </div>
                    </div>

                    
            </div> 
            <!-- fin del DIV PRINCIPAL DEL FORM -->
  
    </div>
            </div>
        </div>
    </div>
  
    

       

   

</div>

<script>
    $(document).ready(function() {
        console.log('INICIO DE LA AGENDA');
        $.ajax({
                  url: "https://api.promo.byw-si.com.mx/api/agenda",
                  // url: "http://127.0.0.1:8000/api/agenda",
                  method: "GET",
                  dataType: "json"
                }).done(function( data ) {
                    // alert("Todo bien");
                    console.log(data,"JSON");
                    $.each(data, function(i, item) {

                            // console.log(data[i].paciente);
                          //   $("medicos").each(function(i){ 
                    //       this.src = "test" + i + ".jpg"; 
                                // });
                                // $("#medicos").append('<option value='+data[i].ID+'>'+data[i].nombre+'</option>');
                        }); //Si pones el content-type en PHP no necesitas parse         
                });


                  

                    var calendarEl = document.getElementById('calendar');
                    var calendar = new FullCalendar.Calendar(calendarEl, {
                      initialView: 'dayGridMonth',
                      locale: 'es',
                      aspectRatio: 1.5,
                      headerToolbar: {
                     start: '', // will normally be on the left. if RTL, will be on the right
                      center: 'dayGridWeek,dayGridMonth,dayGridDay',
                      end: 'today prev,next' // will normally be on the right. if RTL, will be on the left     
                 },
                      // left:'today,prev,next',
                      //       center:'title',
                      //       right:'month,basicWeek,basicDay,agendaWeek,agendaDay'

             




                    });
                    calendar.render();


}); //FIN DE DOCUMENT.READY
</script>


<script>
    //CON ESTA FUNCION SE ACTUALIZA CADA 5 MINUTOS LA PAGINA
      // setInterval("actualizar()",50000);

    
    function enviar(){
                     paciente = $.trim($('#modalPaciente').val());
                     // alert(paciente);
                     hora = $.trim($('#hora').val());
                     edad = $.trim($('#edad').val());
                     telefono1=$.trim($('#telefono1').val());
                     telefono2=$.trim($('#telefono2').val());
                     telefono3=$.trim($('#telefono3').val());
                     medico=$('#modalMedico').val();
                     consultorio=$('#modalConsultorio').val();
                     costo=$('#costoConsulta').val();
                     recado=$('#recado').val();
                     fecha= $('#FECHA').val();
                     data = {
                          paciente: paciente, 
                          edad: edad,
                          hora:hora,
                          telefono1:telefono1,
                          telefono2:telefono2,
                          telefono3:telefono3,
                          medico:medico,
                          consultorio:consultorio,
                          recado:recado,
                          costo:costo,
                          fecha:fecha
                        };
                    $.ajax({
                            method:'POST',
                            // url: 'https://api.promo.byw-si.com.mx/api/agenda',
                            url: 'http://127.0.0.1:8000/api/agenda',
                            data: {
                                action:'cita',
                                data: data,
                            }
                        }).done(item => {
                            if(item.error){
                                msg = 'No se encontro al usuario. Verifica tus datos.';
                                err.append(msg);
                                err.addClass('alert-danger');
                               
                               
                                btn.before(err);
                                btn.removeAttr('disabled');

                            }else{
                                 $("#agendarModal").removeClass('selected');
                               console.log('Success');
                                // window.location = "https://promomedics.byw-si.com.mx/calendario.php";
                            }
                        }, 'json');
                        // location.reload();

                }
                function actualizarCita(){
                        paciente = $.trim($('#modalPaciente').val());
                     // alert(paciente);
                     id_cita = $.trim($('#ID_EDIT').val());
                     hora = $.trim($('#hora').val());
                     EDAD = $.trim($('#EDAD_EDIT').val());
                     TELEFONO1=$.trim($('#telefono1').val());
                     TELEFONO2=$.trim($('#telefono2').val());
                     TELEFONO3=$.trim($('#telefono3').val());
                     medico=$('#modalMedico').val();
                     consultorio=$('#modalConsultorio').val();
                     COSTO=$('#costoConsulta_EDIT').val();
                     RECADO=$('#recado_EDIT').val();
                     fecha= $('#FECHA').val();
                     data = {
                        _token:'{{ csrf_token() }}',
                          paciente: paciente, 
                          marco:"hola",
                          edad: EDAD,
                          hora:hora,
                          telefono1:TELEFONO1,
                          telefono2:TELEFONO2,
                          telefono3:TELEFONO3,
                          medico:medico,
                          consultorio:consultorio,
                          recado:RECADO,
                          costo:COSTO,
                          fecha:fecha,
                          id_cita:id_cita
                        };
                    $.ajax({
                            method:'POST',
                            // url: 'https://api.promo.byw-si.com.mx/api/agenda/'+id_cita,
                            url: 'http://127.0.0.1:8000/api/agenda/'+id_cita,
                            // type: "PATCH",
                            data: {
                                action:'cita',
                                data: data,
                            }
                        }).done(item => {
                            if(item.error){
                                msg = 'No se encontro al usuario. Verifica tus datos.';
                                err.append(msg);
                                err.addClass('alert-danger');
                               
                               
                                btn.before(err);
                                btn.removeAttr('disabled');

                            }else{
                                 $("#agendarModal").removeClass('selected');
                               console.log('Success');
                                // window.location = "https://promomedics.byw-si.com.mx/calendario.php";
                            }
                        }, 'json');
                        // location.reload();

                }

      function actualizar(){
        // location.reload();
      }
</script>
@endsection
