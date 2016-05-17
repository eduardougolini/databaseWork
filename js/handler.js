$(document).ready(function() {
	habilitar();
});

var habilitar = function() {

    $("#comoencontrou").change(function() {
        if ($("#comoencontrou").find(":selected").val() == 1) {
                unshowElements();
                $(".optionClinica").removeClass("oculto");
        } else if ($("#comoencontrou").find(":selected").val() == 2){
                unshowElements();
                $(".optionMedico").removeClass("oculto");
        }else if ($("#comoencontrou").find(":selected").val() == 3){
                unshowElements();
                $(".optionPaciente").removeClass("oculto");
        }else if ($("#comoencontrou").find(":selected").val() == 4){
                unshowElements();
                $(".optionResponsavel").removeClass("oculto");
        }else if ($("#comoencontrou").find(":selected").val() == 5){
                unshowElements();
                $(".optionConvenio").removeClass("oculto");
        }else if ($("#comoencontrou").find(":selected").val() == 6){
                unshowElements();
                $(".optionConsulta").removeClass("oculto");
        }
        else {
                unshowElements();
        }
    });
};

var unshowElements = function() {
	$(".optionMedico").addClass("oculto");
	$(".optionClinica").addClass("oculto");
	$(".optionPaciente").addClass("oculto");
    $(".optionResponsavel").addClass("oculto");
    $(".optionConvenio").addClass("oculto");
    $(".optionConsulta").addClass("oculto");
};
