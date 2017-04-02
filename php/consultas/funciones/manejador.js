$(function () {
   var direccion="";
   $('#modificaPaciente').on('submit',function (e) {
       e.preventDefault();
       var formData = new FormData(document.getElementById('modificaPaciente'));
       $.ajax({
           url:"consultas/funciones/modificar_paciente.php",
           type:"post",
           datatype:'html',
           data:formData,
           cache:false,
           contentType:false,
           processData:false
       })
       
           .done(function (res) {
               $('#mensaje').animate({
                   top:'0%'
               });
               var resultado=res.split("-");
               direccion=resultado[1];
               var padre=document.getElementById('cuerpoMensaje');
               padre.innerHTML=resultado[0];
           })
   })
    $('#cerrarMensaje').click(function () {
        $('#mensaje').animate({
            top:'-100%'
        });
        if(direccion!=undefined){
            setTimeout((function () {
                window.location.replace(direccion)
            }),200);
        }
    })
    $('#formularioRegistro').on('submit',function (e) {
        e.preventDefault();
        var formData = new FormData(document.getElementById('formularioRegistro'));
        $.ajax({
            url:"controladores/ControlRegistroUsuarioPaciente.php",
            type:"post",
            datatype:'html',
            data:formData,
            cache:false,
            contentType:false,
            processData:false
        })

            .done(function (res) {
                $('#mensaje').animate({
                    top:'0%'
                });
                var resultado=res.split("-");
                direccion=resultado[1];
                var padre=document.getElementById('cuerpoMensaje');
                padre.innerHTML=resultado[0];
            })
    })
});

function confirmar(idUsuarios) {
    $('#confirmar').animate({
        top: '0%'
    });
    $('#no').click(function () {
        $('#confirmar').animate({
            top: '-100%'
        })
    });
    $('#si').click(function () {
        $('#confirmar').animate({
            top: '-100%'
        });
        eliminar(idUsuarios);
    })
}
function eliminar(idUsuarios) {
    var formData = new FormData();
    formData.append("idUsuarios", idUsuarios);
    formData.append("action","eliminar");
    $.ajax({
        url:"consultas/funciones/eliminar_modificar.php",
        type:"post",
        datatype:'html',
        data:formData,
        cache:false,
        contentType:false,
        processData:false
    })

        .done(function (res) {
            $('#mensaje').animate({
                top:'0%'
            });
            var resultado=res.split("-");
            direccion=resultado[1];
            var padre=document.getElementById('cuerpoMensaje');
            padre.innerHTML=resultado[0];
        })

}

