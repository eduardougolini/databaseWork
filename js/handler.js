$(document).ready(function() {
	habilitar();
});

var habilitar = function() {

    $("#comoencontrou").change(function() {
        if ($("#comoencontrou").find(":selected").val() == 1) {
                unshowElements();
                $(".optionClinica").removeClass("oculto");
                $(".optionClinica input").attr("required", true);
                selectClinicaData();
                $(".submit").on("click", function() {
                    insertClinicaData();
                });
        } else if ($("#comoencontrou").find(":selected").val() == 2){
                unshowElements();
                $(".optionMedico").removeClass("oculto");
                $(".optionMedico input").attr("required", true);
                selectMedicoData();
                $(".submit").on("click", function() {
                    insertMedicoData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 3){
                unshowElements();
                $(".optionPaciente").removeClass("oculto");
                $(".optionPaciente input").attr("required", true);
                selectPacienteData();
                $(".submit").on("click", function() {
                    insertPacienteData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 4){
                unshowElements();
                $(".optionResponsavel").removeClass("oculto");
                $(".optionResponsavel input").attr("required", true);
                selectResponsavelData();
                $(".submit").on("click", function() {
                    insertResponsavelData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 5){
                unshowElements();
                $(".optionConvenio").removeClass("oculto");
                $(".optionConvenio input").attr("required", true);
                selectConvenioData();
                $(".submit").on("click", function() {
                    insertConvenioData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 6){
                unshowElements();
                $(".optionConsulta").removeClass("oculto");
                $(".optionConsulta input").attr("required", true);
                selectConsultaData();
                $(".submit").on("click", function() {
                    insertConsultaData();
                });
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
    $(".submit").unbind("click");
};

var insertClinicaData = function() {
    var nameClinica = $(".optionClinica .nmClinica").val();
    var addressClinica = $(".optionClinica .endClinica").val();
    var foneClinica = $(".optionClinica .foneClinica").val();
    
    var data = "'" + nameClinica + "'" + ", " + "'" + addressClinica + "'" + ", " + foneClinica;
    
    $.post("src/RouteDivider.php", {
        type: "insert",
        table: "clinica",
        fields: "name, address, fone",
        data: data
    }, function() {
        console.log("deu boa!");
    });
};

var insertMedicoData = function(){
    var nameMedico = $(".optionMedico .nmMedico").val();
    var birthMedico = $(".optionMedico .nascMedico").val();
    var rgMedico = $(".optionMedico .rgMedico").val();
    var cpfMedico = $(".optionMedico .cpfMedico").val();
    var addressMedico = $(".optionMedico .endMedico").val();
    var foneMedico = $(".optionMedico .foneMedico").val();
//    var clinicaMedico
//    Adicionar insert para chaves estrangeiras
    
    var data = nameMedico + ", " + birthMedico + ", " + rgMedico + ", " + cpfMedico + ", " + addressMedico + ", " + foneMedico;
    
    $.post("src/RouteDivider.php", {
        type: "insert",
        table: "medico",
        fields: "name, birth, rg, cpf, address, fone",
        data: data
    });
    
}; 

var insertPacienteData = function(){
    var namePaciente = $(".optionPaciente .nmPaciente").val();
    var birthPaciente = $(".optionPaciente .nascPaciente").val();
    var rgPaciente = $(".optionPaciente .rgPaciente").val();
    var cpfPaciente = $(".optionPaciete .cpfPaciente").val();
    var addressPaciente = $(".optionPaciente .endPaciente").val();
    var fonePaciente = $(".optionPaciente .fonePaciente").val();
    
    var data = namePaciente + ", " + birthPaciente + ", " + rgPaciente + ", " + cpfPaciente + ", " + addressPaciente + ", " + fonePaciente;
    
    $.post("src/RoutDivider.php",{
        type: "insert",
        table: "paciente",
        fields: "name, birth, rg, cpf, address, fone",
        data: data
    });
};

var insertResponsavelData = function(){
    var nameResponsavel = $(".optionResponsavel .nmResponsavel").val();
    var rgResponsavel = $(".optionResponsavel .rgResponsavel").val();
    var cpfResponsavel = $(".optionResponsavel .cpfResponsavel").val();
    var addressResponsavel = $(".optionResponsavel .endResponsavel").val();
    var foneResponsavel = $(".optionResponsavel .foneResponsavel").val();
    
    var data = nameResponsavel + ", " + rgResponsavel + ", " + cpfResponsavel + ", " + addressResponsavel + ", " + foneResponsavel;
    
    $.post("src/RouteDivider.php",{
        type: "insert",
        table: "responsavel",
        fields: "name, birth, rg, cpf, address, fone",
        data: data
    });
};

var insertConvenioData = function(){
    var typeConvenio = $(".optionConvenio .tipoConvenio").val();
    var nameConvenio = $(".optionConveno .nmConvenio").val();
    
    var data = typeConvenio + ", " + nameConvenio;
    
    $.post("src/RouteDivider.php",{
        type: "insert",
        table: "convenio",
        fields: "type, name",
        data: data
    });
};

var insertConsultaData = function(){
    var dataConsulta = $(".optionConsulta .dataConsulta").val();
    var valueConsulta = $(".optionConsulta .vlConsulta").val();
    
    var data = dataConsulta + ", " + valueConsulta;
    
    $.post ("src/RouteDivider.php",{
        type: "insert",
        table: "consulta",
        fields: "data, value",
        data: data
    });    
};

