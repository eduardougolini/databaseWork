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
        }else {
                unshowElements();
        }
    });
};

var unshowElements = function() {
	$(".optionMedico").addClass("oculto");
	$(".optionClinica").addClass("oculto");
	$(".optionPaciente").addClass("oculto");
};
