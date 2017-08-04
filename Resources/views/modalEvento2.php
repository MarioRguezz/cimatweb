 <!-- Modal form-->
    <div class="modal fade" id="evento-modal" tabindex="-1" role="dialog" aria-labelledby="eventoModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cupón</h4>
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
							<label for="descuento" class="form-control-label">Descuento:</label>
								<input type="text" class="form-control" id="descuento" name="descuento">
                        </div>

						<div class="form-group">
                            <label for="cve_cupon" class="form-control-label">Clave:</label>
								<input type="text" class="form-control" id="cve_cupon" name="cve_cupon">
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
    $('#eventoForm').bootstrapValidator({})
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
                url: '../php/obtenerCupon.php',
                data: { 'id': id},
                dataType: 'json',
                success: function(result) {

                    $('#id').val(result.idcupon);
                    $('#nombre').val(result.nombre);
                    $('#descuento').val(result.descuento);
                    $('#cve_cupon').val(result.cve_cupon);
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
            var url = '../php/insertarCupon.php';
        }else{
            var url = '../php/actualizarCupon.php';
        }

        var id = $("#id").val();
        var nombre=  $("#nombre").val();
        nombre = replaceChars(nombre);
		var descuento =  $("#descuento").val();
		var cve_cupon =  $("#cve_cupon").val();

        form_data.append('id', id);
        form_data.append('nombre', nombre);
        form_data.append('descuento', descuento);
        form_data.append('cve_cupon', cve_cupon);
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
