<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Eliminar
            </div>
            <div class="modal-body">
                Realmente desea eliminar este registro?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" role="form" data-toggle="validator" enctype="multipart/form-data">
                    <input type="hidden" id="idEventoDelete">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="buttonDelete" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<form style="display: hidden" method="POST" id="formReloadDelete">
    <input type="hidden" id="saved" name="saved" value="2"/>
</form>
    
<script>
    //OBTENEMOS PARAMETROS
    $('#confirm-delete').on('show.bs.modal', function (event) {
        var form_data = new FormData();
        var button = $(event.relatedTarget);
        var id = button.data('delete');
        $('#idEventoDelete').val(id);
    });
    
    //AL DAR CLICK EN DELETE
    $("#deleteForm").submit(function(event){
        event.preventDefault();
        submitFormDelete();
    });
    
    //PARA PROCESAR EL DELETE
    function submitFormDelete(){
        var form_data = new FormData();
        $( "#buttonDelete" ).prop( "disabled", true );
        var idEventoDelete = $("#idEventoDelete").val();
        form_data.append('idEventoDelete', idEventoDelete);
        $.ajax({
            url: "../php/eliminarEvento.php",
            type: "POST",               
            data:form_data,         
            contentType: false,       
            cache: false,              
            processData:false,    
            success: function(data){
                $("#formReloadDelete").submit();
            }
        });
    }
</script>