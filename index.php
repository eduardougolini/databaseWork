<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR...nsitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html xmlns="http://www.w3.org/1999/xhtml">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
                <title>Inserir no BD</title>
                <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
                
        </head>
        <body>
                <form class="formularioTopo">
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
                                <label for="nmClinica">Nome Clinica:</label><br />
                                <input type="text" name="nmClinica" class="nmClinica" size="50" maxlength="70" />
                                <label for="endClinica">Endereço Clinica:</label><br />
                                <input type="text" name="endClinica" class="endClinica" size="50" maxlength="70" />
                                <label for="foneClinica">Fone Clinica:</label><br />
                                <input type="tel" name="foneClinica" class="foneClinica" size="15" maxlength="15" />
                        </div>

                        <div class="optionMedico oculto">
                                <label for="nmMedico">Nome Médico:</label><br />
                                <input type="text" name="nmMedico" class="nmMedico" size="50" maxlength="70" />
                                <label for="nascMedico">Data Nascimento Médico:</label><br />
                                <input type="date" name="nascMedico" class="nascMedico" size="8" />
                                <label for="rgMedico">RG Médico:</label><br />
                                <input type="text" name="rgMedico" class="rgMedico" size="15" maxlength="15" />
                                <label for="cpfMedico">CPF Médico:</label><br />
                                <input type="text" name="cpfMedico" class="cpfMedico" size="15" maxlength="15" />
                                <label for="endMedico">Endereço Médico:</label><br />
                                <input type="text" name="endMedico" class="endMedico" size="50" maxlength="70" />
                                <label for="foneMedico">Fone Médico:</label><br />
                                <input type="tel" name="foneMedico" class="foneMedico" size="15" maxlength="15" />
                                <label for="clinicaMedico">Clínica do Médico:</label><br />
                                <select name="clinicaHasMedico" class="clinicaHasMedico">
                                        <option value="">Selecione a clínica: </option>
                                </select>

                        </div>

                        <div class="optionPaciente oculto">
                                <label for="nmPaciente">Nome Paciente:</label><br />
                                <input type="text" name="nmPaciente" class="nmPaciente" size="50" maxlength="70" />
                                <label for="nascPaciente">Data Nascimento Paciente:</label><br />
                                <input type="date" name="nascPaciente" class="nascPaciente" size="8" />
                                <label for="rgPaciente">RG Paciente:</label><br />
                                <input type="text" name="rgPaciente" class="rgPaciente" size="15" maxlength="15" />
                                <label for="cpfPaciente">CPF Paciente:</label><br />
                                <input type="text" name="cpfPaciente" class="cpfPaciente" size="15" maxlength="15" />
                                <label for="endPaciente">Endereço Paciente:</label><br />
                                <input type="text" name="endPaciente" class="endPaciente" size="50" maxlength="70" />
                                <label for="fonePaciente">Fone Paciente:</label><br />
                                <input type="tel" name="fonePaciente" class="fonePaciente" size="15" maxlength="15" />
                                <select name="clinicaHasPaciente" class="clinicaHasPaciente">
                                    <option value="">Selecione a clínica: </option>
                                </select>
                                <select name="convenioId" class="convenioId">
                                    <option value="">Selecione o convênio: </option>
                                </select>

                        </div>

                        <div class="optionResponsavel oculto">
                                <label for="nmResponsavel">Nome Responsável:</label><br />
                                <input type="text" name="nmResponsavel" class="nmResponsavel" size="50" maxlength="70" />
                                <label for="rgResponsavel">RG Responsável:</label><br />
                                <input type="text" name="rgResponsavel" class="rgResponsavel" size="15" maxlength="15" />
                                <label for="cpfResponsavel">CPF Responsável:</label><br />
                                <input type="text" name="cpfResponsavel" class="cpfResponsavel" size="15" maxlength="15" />
                                <label for="endResponsavel">Endereço Responsável:</label><br />
                                <input type="text" name="endResponsavel" class="endResponsavel" size="50" maxlength="70" />
                                <label for="foneResponsavel">Fone Responsável:</label><br />
                                <input type="tel" name="foneResponsavel" class="foneResponsavel" size="15" maxlength="15" />
                                <select name="pacienteHasResponsavel" class="pacienteHasResponsavel">
                                    <option value="">Selecione o paciente: </option>
                                </select>
                        </div>

                        <div class="optionConvenio oculto">
                                <label for="tipoConvenio">Tipo Convênio:</label><br />
                                <input type="text" name="tipoConvenio" class="tipoConvenio" size="50" maxlength="70" />
                                <label for="nmConvenio">Nome Convênio:</label><br />
                                <input type="text" name="nmConvenio" class="nmConvenio" size="15" maxlength="15" />
                        </div>

                        <div class="optionConsulta oculto">
                                <label for="dataConsulta">Data Consulta:</label><br />
                                <input type="date" name="dataConsulta" class="dataConsulta" size="8" />
                                <label for="vlConsulta">Valor Consulta:</label><br />
                                <input type="text" name="vlConsulta" class="vlConsulta" size="15" maxlength="15" />
                                <select name="pacienteHasConsulta" class="pacienteHasConsulta">
                                    <option value="">Selecione o paciente: </option>
                                </select>
                        </div>
                        <br /> <!-- Blasiu poarr -->
                        <a class="submit">Enviar</a>

                        </div>
                        <br />

                </div>
                </form>
            
            <div id="selectResults" ></div>
                <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
                <script type="text/javascript" src="js/handler.js"></script>
                <script type="text/javascript" src="js/selector.js"></script>
        </body>
</html>