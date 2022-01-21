


$(document).ready(function(){
    $('#btnSend').click(function(){
        


        var errores='';
       
        if($('#correo').val()==''){
            errores += '<p>Ingrese un correo.</p>';
        }
        if($('#names').val()==''){
            errores += '<p>Escriba un nombre.</p>';
        }
        if($('#user_date').val()==''){
            errores += '<p>Seleccione una fecha.</p>';
        }
        if($('#asunto').val()==''){
            errores += '<p>Escriba un asunto.</p>';
        }
        if($('#msg').val()==''){
            errores += '<p>Escriba un mensaje.</p>';
        }

        if(errores ==''==false){
            var mensajeModal=' <div class="modal_wrap">'+
                                    '<div class="mensaje_modal">'+
                                        ' <h3>Errores encontrados</h3>'+
                                            errores+
                                            '<span id="btnClose">Cerrar</span>'+
                                    '</div>'+
                                '</div>'
            $('body').append(mensajeModal); 
        }
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();
        }); 
    });
}); 