 <!-- Modal form-->
    <div class="modal fade" id="evento-modal" tabindex="-1" role="dialog" aria-labelledby="eventoModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Evento</h4>
                </div>
                <div class="modal-body">
                
                    <form id="eventoForm" enctype="multipart/form-data">
					
                        <input type="hidden" id="id">
                        
                        <div class="form-group">
                            <label for="nombre" class="form-control-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            <span class="help-block" id="nombreError" />
                        </div>
									
                        <div class="form-group">
							<label for="fechaInicio" class="form-control-label">Fecha de Inicio:</label>
								<input type="text" class="form-control" id="fechaInicio" name="fechaInicio">
		
							<span class="help-block" id="fechaInicioError" />
                        </div>
						
						<div class="form-group">
                            <label for="fechaFin" class="form-control-label">Fecha de Finalizaci&oacuten:</label>
	
								<input type="text" class="form-control" id="fechaFin" name="fechaFin">
				
                            <span class="help-block" id="fechaFinError" />
                        </div>
						
						<div class="form-group">
                            <label for="descripcion" class="form-control-label">Descripci&oacuten:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                            <span class="help-block" id="descripcionError" />
                        </div>
	
						<div class="form-group">
                            <label for="fotografia" class="form-control-label">Fotograf&iacutea:</label>
                            <input type="file" class="filestyle" data-buttonBefore="true" data-buttonText="Buscar Fotrografia" id="fotografia" name="fotografia">
                            <span class="help-block" id="fotografiaError" />
                        </div>
						
						<div class="form-group">
                            <label for="capacidad" class="form-control-label">Capacidad:</label>
                            <input type="text" class="form-control" id="capacidad" name="capacidad">
                            <span class="help-block" id="capacidadError" />
                        </div>
						
						<div class="form-group">
                            <label for="precio" class="form-control-label">Precio:</label>
                            <input type="text" class="form-control" id="precio" step="0.1" name="precio">
                            <span class="help-block" id="precioError" />
                        </div>
						
                        <div id="success"></div>
                        
                        <div class="form-group">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submite" id="buttonSave" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <form style="display: hidden" method="POST" id="formReload">
        <input type="hidden" id="saved" name="saved" value="1"/>
    </form>

    <script type="text/javascript">
    //Validacion de formulario
    $('#eventoForm').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
        },
		
        fields: {
		
			nombre: {
                container: '#nombreError',
                validators: {
                    notEmpty: {
                        message: 'El nombre es requerido.'
                    }
                }
            },
			
			fechaInicio: {
                container: '#fechaInicioError',
                validators: {
                    notEmpty: {
                        message: 'La fecha de inicio es requerida.'
                    },
					date: { 
						format: 'YYYY-MM-DD'
					}    
                }
            },
			
			fechaFin: {
                container: '#fechaFinError',
                validators: {
                    notEmpty: {
                        message: 'La fecha de finalizaci&oacuten es requerida.'
                    },
					date: { 
						format: 'YYYY-MM-DD' 
					}                     
				}
            },
			
			descripcion: {
                container: '#descripcionError',
                validators: {
                    notEmpty: {
                        message: 'La descripci&oacuten es requerida.'
                    }
                }
            },
			
            fotografia: {
                container: '#fotografiaError',
                validators: {
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        message: 'Solamente jpeg, jpg o png.'
                    }
                }
            },
			
			capacidad: {
                container: '#capacidadError',
                validators: {
                    notEmpty: {
                        message: 'La capacidad del evento es requerida.'
                    },
					integer: {
                        message: 'The value is not an integer'
                    }
                }
            },
			
			precio: {
                container: '#precioError',
                validators: {
                    notEmpty: {
                        message: 'El precio del evento es requerido.'
                    }
                }
            }
			
        }
    })
    .on('success.form.bv', function(e) {
        e.preventDefault(); // Prevent the form from submitting
        submitFormEvento();
    });
    //Al iniciar el modal "Inicializamos todo"
    $('#evento-modal').on('show.bs.modal', function (event) {
        //Obtenemos los parametros enviados desde el boton.
        var button = $(event.relatedTarget);
        var id = button.data('id');
        
        if(id != 'nuevo'){
            //Si no es una nueva nota, es porque tenemos que editar
            $.ajax({
                type: 'POST',
                url: '../php/obtenerEvento.php',
                data: { 'id': id},
                dataType: 'json',
                success: function(result) {
					
                    $('#id').val(result.idevento);
                    $('#nombre').val(result.nombre);
                    $('#fechaInicio').val(result.fecha_inicio);
					$('#fechaFin').val(result.fecha_fin);
					$('#descripcion').val(result.descripcion);
					$('#capacidad').val(result.capacidad);
					$('#precio').val(result.precio);
                }
            });
        }else{
            //Si es una nueva nota reiniciamos el form
            document.getElementById("eventoForm").reset();
            $("#buttonSave").prop("disabled", false);
            $('#id').val(null);
        }

    });
	
    function submitFormEvento(){
        var form_data = new FormData();
        $("#buttonSave" ).prop("disabled", true );
		//Si esta definido el id, es actualizacion
		if(!$("#id").val()){
            var url = '../php/insertarEvento.php';
        }else{
            var url = '../php/actualizarEvento.php';
        }
            
        var id = $("#id").val();
        var nombre=  $("#nombre").val();
        nombre = replaceChars(nombre);
		var fechaInicio =  $("#fechaInicio").val();
		var fechaFin =  $("#fechaFin").val();
		var descripcion =  $("#descripcion").val();
        descripcion = replaceChars(descripcion);		
        var fotografia =  $("#fotografia").prop('files')[0];
		var capacidad =  $("#capacidad").val();
		var precio =  $("#precio").val();

        form_data.append('id', id);
        form_data.append('nombre', nombre);
        form_data.append('fechaInicio', fechaInicio);
        form_data.append('fechaFin', fechaFin);
        form_data.append('descripcion', descripcion);
        form_data.append('fotografia', fotografia);
        form_data.append('capacidad', capacidad);
        form_data.append('precio', precio);
        $.ajax({
            url: url,
            type: "POST",               
            data:form_data,         
            contentType: false,       
            cache: false,              
            processData:false,    
            success: function(data){
                if(data == 1){
                    SuccessForm();
                }else if(data == 5){
                    $( "#buttonSave" ).prop("disable", false);
                    ErrorServer();
                }
            }
        });
    }
    
    function replaceChars(string){
        return string.replace("'","''");
    }
    function SuccessForm() {
        $("#formReload").submit();
    }
	
    function ErrorServer() {
        $('#success').html("<div class='alert alert-danger'>");
        $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>");
        $('#success > .alert-danger').append("<strong>Error al almacenar la informacion, intente despues.</strong>");
        $('#success > .alert-danger').append('</div>');
    }
    </script>