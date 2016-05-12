<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR...nsitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <title>Inserir no BD</title>
                <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
                <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
                <script type="text/javascript" src="handler.js"></script>
                
        </head>
        <body>
                <form class="formularioTopo" action="formulario.php" method="post" name="form" onsubmit="return formCheck(this);">
                <div class="formularioTopoMeio">
                        <div class="optionEsquerda">
                                <label for="comoencontrou">Selecione:</label><br />
                                <select name="comoencontrou" id="comoencontrou">
                                        <option value="">Selecione para inserir: </option>
                                        <option value="1">Clínica</option>
                                        <option value="2">Medico</option>
                                        <option value="3">Paciente</option>
                                        <option value="4">Responsável</option>
                                        <option value="5">Convênio</option>
                                        <option value="6">Consulta</option>
                                </select>
                        </div>
                        <br>
                        <div class="optionClinica oculto">
                                <label for="codClinica">Código Clinica:</label><br />
                                <input type="text" name="codClinica" id="codClinica" size="5" maxlength="5" />
                                <label for="nmClinica">Nome Clinica:</label><br />
                                <input type="text" name="nmClinica" id="nmClinica" size="50" maxlength="70" />
                                <label for="endClinica">Endereço Clinica:</label><br />
                                <input type="text" name="endClinica" id="endClinica" size="50" maxlength="70" />
                                <label for="foneClinica">Fone Clinica:</label><br />
                                <input type="tel" name="foneClinica" id="foneClinica" size="15" maxlength="15" />
                        </div>

                        <div class="optionMedico oculto">
                                <label for="codMedico">Código Médico:</label><br />
                                <input type="text" name="codMedico" id="codMedico" size="5" maxlength="5" />
                                <label for="nmMedico">Nome Médico:</label><br />
                                <input type="text" name="nmMedico" id="nmMedico" size="50" maxlength="70" />
                                <label for="nascMedico">Data Nascimento Médico:</label><br />
                                <input type="date" name="nascMedico" id="nascMedico" size="8" />
                                <label for="rgMedico">RG Médico:</label><br />
                                <input type="text" name="rgMedico" id="rgMedico" size="15" maxlength="15" />
                                <label for="cpfMedico">CPF Médico:</label><br />
                                <input type="text" name="cpfMedico" id="cpfMedico" size="15" maxlength="15" />
                                <label for="endMedico">Endereço Médico:</label><br />
                                <input type="text" name="endMedico" id="endMedico" size="50" maxlength="70" />
                                <label for="foneMedico">Fone Médico:</label><br />
                                <input type="tel" name="foneMedico" id="foneMedico" size="15" maxlength="15" />

                        </div>

                        <div class="optionPaciente oculto">
                                <label for="codPaciente">Código Paciente:</label><br />
                                <input type="text" name="codPaciente" id="codPaciente" size="5" maxlength="5" />
                                <label for="nmPaciente">Nome Paciente:</label><br />
                                <input type="text" name="nmPaciente" id="nmPaciente" size="50" maxlength="70" />
                                <label for="nascPaciente">Data Nascimento Paciente:</label><br />
                                <input type="date" name="nmPaciente" id="nmPaciente" size="8" />
                                <label for="rgPaciente">RG Paciente:</label><br />
                                <input type="text" name="rgPaciente" id="rgPaciente" size="15" maxlength="15" />
                                <label for="cpfPaciente">CPF Paciente:</label><br />
                                <input type="text" name="cpfPaciente" id="cpfPaciente" size="15" maxlength="15" />
                                <label for="endPaciente">Endereço Paciente:</label><br />
                                <input type="text" name="endPaciente" id="endPaciente" size="50" maxlength="70" />
                                <label for="fonePaciente">Fone Paciente:</label><br />
                                <input type="tel" name="fonePaciente" id="fonePaciente" size="15" maxlength="15" />

                        </div>

                        <input type="submit" name="submit" id="submit" value="Enviar">

                        </div>
                        <br />
                        
                </div>
                </form>
        <body>
</html>