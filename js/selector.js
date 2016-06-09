var selectClinicaData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "clinica",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var selectMedicoData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "medico",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var selectPacienteData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "paciente",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var selectResponsavelData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "responsavel",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var selectConvenioData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "convenio",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var selectConsultaData = function(){
    $.post("src/RouteDivider.php",{
        type: "select",
        table: "consulta",
        fields: "*"
    }, function(data){
        showResults(data);
    });
};

var showResults = function(data){
    $("#selectResults").html(data);
};

function refresharTela() {
    location.reload();
}