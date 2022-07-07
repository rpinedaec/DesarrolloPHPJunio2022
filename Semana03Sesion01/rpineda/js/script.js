$(document).ready(function(){

    $("#login").on("submit",function(e){
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "controlador/acceso.php",
            data: new FormData(this),
            processData: false,

            contentType: false,

            cache:false
        }).done(
            function(res){
                console.log(res);
                let respuesta = JSON.parse(res);
                if(respuesta.ok){
                    location.href = "vistas/administrar.php";
                }
                else{
                    let respuesta = JSON.parse(res);
                    $("#mensaje").html(respuesta.error);
                }
            }
        ).fail(function(err){
            console.log(err);
        });
    });
});