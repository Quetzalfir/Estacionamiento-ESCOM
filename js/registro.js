function disponible(nickname) {
    $.ajax({
        url : 'php/buscarUsuario.php',
        type : 'POST',
        dataType : 'html',
        data : { IDConductor: nickname },
        })

        .done(function(resultado){
        if(resultado == "Disponible"){
            $("#disponible").text(resultado);
            $("#disponible").css({'color':'#45932CFF'});
        }
        else{
            $("#disponible").text(resultado);
            $("#disponible").css({'color':'#D1322DFF'});
        }

    })
}

$(document).on('keyup', '#IDConductor', function(){
    var nickname = $(this).val();
    disponible(nickname);
});

$(document).ready(function() {
    $(".container form [name=tipo]").on("change", function() {
        var val = $(this).val();

        if (val == "Alumno") {
            $("#tipoId").text("Boleta");
        } else {
            $("#tipoId").text("RFC");
        }
    });

    $(".container form [name=pass2]").on("blur", function() {
        if ($("main form [name=pass]").val() != $(this).val()) {
            this.setCustomValidity("Las contraseñas no coinciden");
        } else {
            this.setCustomValidity("");
        }
    });
});
