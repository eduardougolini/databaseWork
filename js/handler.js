$(document).ready(function() {
	habilitar();
});

var habilitar = function() {

    $("#comoencontrou").change(function() {
        if ($("#comoencontrou").find(":selected").val() == 1) {
                unshowElements();
                $(".optionClinica").removeClass("oculto");
                $(".optionClinica input").attr("required", true);
        } else if ($("#comoencontrou").find(":selected").val() == 2){
                unshowElements();
                $(".optionMedico").removeClass("oculto");
                $(".optionMedico input").attr("required", true);
        }else if ($("#comoencontrou").find(":selected").val() == 3){
                unshowElements();
                $(".optionPaciente").removeClass("oculto");
                $(".optionPaciente input").attr("required", true);
        }else if ($("#comoencontrou").find(":selected").val() == 4){
                unshowElements();
                $(".optionResponsavel").removeClass("oculto");
                $(".optionResponsavel input").attr("required", true);
        }else if ($("#comoencontrou").find(":selected").val() == 5){
                unshowElements();
                $(".optionConvenio").removeClass("oculto");
                $(".optionConvenio input").attr("required", true);
        }else if ($("#comoencontrou").find(":selected").val() == 6){
                unshowElements();
                $(".optionConsulta").removeClass("oculto");
                $(".optionConsulta input").attr("required", true);
        }
        else {
                unshowElements();
        }
    });
};

var unshowElements = function() {
    $(".optionMedico").addClass("oculto");
    $(".optionMedico input").removeAttr("required");
    $(".optionClinica").addClass("oculto");
    $(".optionClinica input").removeAttr("required");
    $(".optionPaciente").addClass("oculto");
    $(".optionPaciente input").removeAttr("required");
    $(".optionResponsavel").addClass("oculto");
    $(".optionResponsavel input").removeAttr("required");
    $(".optionConvenio").addClass("oculto");
    $(".optionConvenio input").removeAttr("required");
    $(".optionConsulta").addClass("oculto");
    $(".optionConsulta input").removeAttr("required");
};
