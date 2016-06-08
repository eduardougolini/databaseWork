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
                getRecordIds($(".optionMedico .clinicaHasMedico"), "clinica");
                $(".submit").on("click", function() {
                    insertMedicoData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 3){
                unshowElements();
                $(".optionPaciente").removeClass("oculto");
                $(".optionPaciente input").attr("required", true);
                selectPacienteData();
                getRecordIds($(".optionPaciente .clinicaHasPaciente"), "clinica");
                getRecordIds($(".optionPaciente .convenioId"), "convenio");
                $(".submit").on("click", function() {
                    insertPacienteData();
                });
        }else if ($("#comoencontrou").find(":selected").val() == 4){
                unshowElements();
                $(".optionResponsavel").removeClass("oculto");
                $(".optionResponsavel input").attr("required", true);
                selectResponsavelData();
                getRecordIds($(".optionResponsavel .pacienteHasResponsavel"), "paciente");
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
                getRecordIds($(".optionConsulta .pacienteHasConsulta"), "paciente");
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
    
    $.post("src/RouteDivider.php", {
        type: "insert",
        table: "clinica",
        data: {
            name: nameClinica,
            address: addressClinica,
            fone: foneClinica
        }
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
    
    $.post("src/RouteDivider.php", {
        type: "insert",
        table: "medico",
        data: {
            name: nameMedico,
            birth: birthMedico,
            rg: rgMedico,
            cpf: cpfMedico,
            address: addressMedico,
            fone: foneMedico
        }
    });
    
}; 

var insertPacienteData = function(){
    var namePaciente = $(".optionPaciente .nmPaciente").val();
    var birthPaciente = $(".optionPaciente .nascPaciente").val();
    var rgPaciente = $(".optionPaciente .rgPaciente").val();
    var cpfPaciente = $(".optionPaciete .cpfPaciente").val();
    var addressPaciente = $(".optionPaciente .endPaciente").val();
    var fonePaciente = $(".optionPaciente .fonePaciente").val();
    
    $.post("src/RouteDivider.php",{
        type: "insert",
        table: "paciente",
        data: {
            name: namePaciente,
            birth: birthPaciente,
            rg: rgPaciente,
            cpf: cpfPaciente,
            address: addressPaciente,
            fone: fonePaciente
        }
    });
};

var insertResponsavelData = function(){
    var nameResponsavel = $(".optionResponsavel .nmResponsavel").val();
    var rgResponsavel = $(".optionResponsavel .rgResponsavel").val();
    var cpfResponsavel = $(".optionResponsavel .cpfResponsavel").val();
    var addressResponsavel = $(".optionResponsavel .endResponsavel").val();
    var foneResponsavel = $(".optionResponsavel .foneResponsavel").val();
    
    $.post("src/RouteDivider.php",{
        type: "insert",
        table: "responsavel",
        data: {
            name: nameResponsavel,
            rg: rgResponsavel,
            cpf: cpfResponsavel,
            address: addressResponsavel,
            fone: foneResponsavel
        }
    });
};

var insertConvenioData = function(){
    var typeConvenio = $(".optionConvenio .tipoConvenio").val();
    var nameConvenio = $(".optionConvenio .nmConvenio").val();
    
    $.post("src/RouteDivider.php",{
        type: "insert",
        table: "convenio",
        data: {
            type: typeConvenio,
            name: nameConvenio
        }
    });
};

var insertConsultaData = function(){
    var dataConsulta = $(".optionConsulta .dataConsulta").val();
    var valueConsulta = $(".optionConsulta .vlConsulta").val();
    
    $.post ("src/RouteDivider.php",{
        type: "insert",
        table: "consulta",
        data: {
            date: dataConsulta,
            value: valueConsulta
        }
    });    
};

var getRecordIds = function(element, table) {
    $.post("src/RouteDivider.php",{
        type: "selectIds",
        table: table
    }, function(data){
        
         $.each(JSON.parse(data), function(i, item) {   
             element.append($('<option>', {
                value: item.id,
                text: item.id
            }));
            
        });
    });
};

