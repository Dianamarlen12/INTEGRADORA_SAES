<?php
 //conexion a la base
include("conexion_base.php");
 $person = $_ONCLICK['CVE_PERSONA'];
?>
<!DOCTYPE html>
<html>
        <head>
            <title>HISTORIA CLINICA</title>
            <link type="text/css" href="css/historia.css" rel="stylesheet">
        </head>
 <body background="imagenes/fondo.jpg">

   <div class="form">

     <form  action="php/historia.php" method="POST">
        
        <center><h1>HISTORIA CLINICA</h1></center>
        <p align="right">Fecha:<input type="date" id="1" name="fecha"></p> <!--HISTORIA CLINICA--> 
<?php
$consulta= "SELECT DATOS_PERSONA.NOMBRE, DATOS_PERSONA.APE_PAT, DATOS_PERSONA.APE_MAT, DATOS_PERSONA.FECHA_NACIMIENTO, DATOS_PERSONA.ESTADO,CURP
FROM  USUARIO
INNER JOIN DATOS_PERSONA  ON DATOS_PERSONA.CVE_PERSONA = USUARIO.CVE_PERSONA WHERE DATOS_PERSONA.CVE_PERSONA= '$person'";
$resultado = mysqli_query($conexion, $consulta);
?>
<div id="container">
            <h1>Datos del alumno</h1>
            <hr width=100%  align="center"  size=2 color="green"></hr>
            </br>
<?php
$cont=mysqli_num_rows($resultado1);
if ($cont == 1){
    while($fila1 = mysqli_fetch_array ($resultado1)){ ?> 
                <center>
                <table>
                <tr>
                <th><p><h3>NOMBRE:</h3></p></th>
                <td><?php echo $fila1['NOMBRE'] ?></td>
                </tr>
      

        <?php
       
    }
    
}else{
    echo "Sin registros";
}
?>
</table>
        <label>ANTECEDENTES HEREDOFAMILIARES</label> <!--HEREDOFAMILIARES-->
        <p></p>
        <label>ESCRIBE SI O NO SEG&UacuteN LAS ENFERMEDADES QUE HAYAN PADECIDO O PADEZCAN ALGUNOS DE LOS FAMILIARES DIRECTOS:</label>
        <p></p>
        <center>
                Enf. Cardiacas<input type="text" id="2" name="heredofamiliares1" size="5">
                Hipertensi&oacuten<input type="text" id="3" name="heredofamiliares2" size="5">
                Convulsiones<input type="text" id="4" name="heredofamiliares3" size="5">
                C&aacutencer<input type="text" id="5" name="heredofamiliares4" size="5">
                <p></p>
                &emsp14;
                Enf. Mentales<input type="text" id="6" name="heredofamiliares5" size="5">
                Diabetes<input type="text" id="7" name="heredofamiliares6" size="5">
                Enf. Al&eacutergicas<input type="text" id="8" name="heredofamiliares7" size="5">
                Tuberculosis<input type="text" id="9" name="heredofamiliares8" size="5">
        </center>

        <br></br>
        <br></br>

        <label>ANTECEDENTES PERSONALES NO PATOL&OacuteGICOS</label>
        <p></p>
        <label>Vacunas que te hayan puesto recientemente:<input type="text" id="10" name="vacunas" placeholder="Ingrese que vacunas tiene" size="80"></p>

        <label>HABITOS</label>
        <p></p>
        <label>&#191;Pr&aacutecticas deporte?</label>
               <select name="select1" id="s1">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;
        <label>&#191;Cu&aacutel?<input type="text" id="13" name="cuales_deportes" placeholder="Ingreselos aqui" size="26"></label>
        <label>&#191;Cu&aacutentas veces a la semana?<input type="text" id="14" name="veces_semana" placeholder="Ingreselas aqui" size="26"></label>
        <p></p> 
        <label>&#191;Fumas?</label>
                <select name="select2" id="s2">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;
        <label>&#191;Edad de inicio?<input type="text" id="17" name="edad_inicio.F" placeholder="Ingrese la edad de comienzo" size="26"></label>
        <label>&#191;Cu&aacutentos cigarros a la semana?<input type="text" id="18" name="cigarros_semana" placeholder="Ingrese la cantidad aqui" size="24"></label>
        <p></p>
        <label>&#191;Consumes bebidas alcoh&oacutelicas?</label>
                <select name="select3" id="s3">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;
        <label>&#191;Edad de inicio?<input type="text" id="21" name="edad_inicio_B" placeholder="Ingrese la edad de comienzo" size="18"></label>
        <label>&#191;Cantidad por semana?<input type="text" id="22" name="cantidad_semanal" placeholder="Ingrese la cantidad aqui" size="18"></label>
        <p></p>
        <label>&#191;Consumes drogas?</label>
                <select name="select4" id="s4">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;
        <label>&#191;Edad de inicio?<input type="text" id="25" name="edad_inicio_D" placeholder="Ingrese la edad de comienzo" size="21"></label>
        <label>&#191;Cu&aacutentas veces por semana?<input type="text" id="26" name="veces_semana_D" placeholder="Ingrese la cantidad aqui" size="21"></label>
        <p></p>

        <br></br>
        <br></br>
        <br></br>

        <label>ANTECEDENTES PERSONALES PATOL&OacuteGICOS</label>
        <p></p>
        <label>ANTECEDENTES QUIR&UacuteRGICOS</label>
        <p></p>
        <label>&#191;Te han operado alguna vez?</label>
                <select name="select5" id="s5">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14; &emsp14; &emsp14; 
        <label>&#191;Fecha de la cirug&iacutea?<input type="date" id="29" name="fecha_cirugia"></label>
        <p></p>
        <label>&#191;Tipo de cirug&iacutea realizada?<input type="text" id="30" name="tipo_cirugia" placeholder="Ingrese la cirugia aqui" size="30"></label>
        <label>&#191;En que instituci&oacuten fue?<input type="text" id="31" name="institucion" placeholder="Ingresela aqui" size="35"></label>

        <br></br>
        <br></br>
        <br></br>

        <label>ANTECEDENTES AL&EacuteRGICOS</label>
        <p></p>
        <label>&#191;Eres al&eacutergico a alg&uacuten medicamento?</label>
                <select name="select6" id="s6">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14; &emsp14; &emsp14; 
        <label>&#191;A que medicamento?<input type="text" id="34" name="medicamento_alergia" placeholder="Ingrese el medicamento aqui" size="48"></p>

        <br></br>
        <br></br>

        <label>ANTECEDENTES TRAUM&AacuteTICOS</label>
        <p></p>
        <label>&#191;Haz sufrido alg&uacuten accidente que amerit&oacute hospitalizaci&oacuten?</label>
                <select name="select7" id="s7">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        <p></p>
        <label>&#191;Tienes alguna secuela por ese accidente?</label>
                <select name="select8" id="s8">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        <p></p>
        <label>&#191;Fracturas o luxaciones precias?</label>
                <select name="select9" id="s9">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        <p></p>
        <label>&#191;Hubo alguna complicaci&oacuten?</label>
                <select name="select10" id="s10">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;
        <label><input type="text" id="43" name="complicacion_accidente" placeholder="En caso de ser si, ingresela aqui" size="78"></p

        <br></br>
        <br></br>
        <br></br>

        <label>ANTECEDENTES TRANSFUNCIONALES</label>
        <p></p>
        <label>&#191;Te han realizado alguna transfusi&oacuten sangu&iacutenea?</label>
                <select name="select11" id="s11">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14;&emsp14;&emsp14;
        <label>&#191;En que fecha fue?<input type="date" id="46" name="fecha_transfusion" ></label>
        <p></p>
        <label>Motivo de la transfusi&oacuten:<input type="text" id="47" name="motivo_transfusion" placeholder="Ingreselo aqui" size="95"></label>
        
        <br></br>
        <br></br>
        <br></br>

        <label>ESCRIBE SI O NO SEG&UacuteN LAS ENFERMEDADES QUE PADECES O HAS PADECIDO:</label>
                <p></p>
                Varicela&emsp14;<input type="text" id="48" name="enf_paceces1" size="10">
                &emsp14;
                Tosferina&emsp14;<input type="text" id="49" name="enf_paceces2" size="10">
                &emsp14;
                Sarampi&oacuten&emsp14;<input type="text" id="50" name="enf_paceces3" size="10">
                &emsp14;
                Rubeola&emsp14;<input type="text" id="51" name="enf_paceces4" size="10">
                &emsp14;
                Sinusitis&emsp14;<input type="text" id="52" name="enf_paceces5" size="10">
                <p></p>
                Paperas&emsp14;<input type="text" id="53" name="enf_paceces6" size="8">
                &emsp14;
                Hepatitis&emsp14;<input type="text" id="54" name="enf_paceces7" size="8">
                &emsp14;
                Tifoidea&emsp14;<input type="text" id="55" name="enf_paceces8" size="8">
                &emsp14;
                Fiebre Reum&aacutetica&emsp14;<input type="text" id="56" name="enf_paceces9" size="8">
                &emsp14;
                Convulsiones&emsp14;<input type="text" id="57" name="enf_paceces10" size="8">
                <p></p>
                Parasitosis&emsp14;<input type="text" id="58" name="enf_paceces11" size="10">
                &emsp14;
                Diabetes Mellitus&emsp14;<input type="text" id="59" name="enf_paceces12" size="10">
                &emsp14;
                Hipertensi&oacuten Arterial&emsp14;<input type="text" id="60" name="enf_paceces13" size="10">
                &emsp14;
                Anemia&emsp14;<input type="text" id="61" name="enf_paceces14" size="10">
                <p></p>
                Enf. Cardiacas&emsp14;<input type="text" id="62" name="enf_paceces15" size="10">
                &emsp14;
                Enf. Renales&emsp14;<input type="text" id="63" name="enf_paceces16" size="10">

        <br></br>
        <br></br>
        <br></br>

        <label>ANTECEDENTES GINECOBST&EacuteTRICOS  (EXCLUSIVO SEXO FEMENINO)</label>
        <p></p>
        <label>&#191;Edad de la primera menstruaci&oacuten?<input type="text" id="64" name="primer_menstruacion" placeholder="Ingresela aqui" size="40"></label>
        &emsp14;
        <label>&#191;Periodo regular?</label>
                <select name="select12" id="s12">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        <p></p>
        <label>Cada cu&aacutentos d&iacuteas:<input type="text" id="67" name="dias_menstruacion" placeholder="Ingreselos aqui" size="15"></label>
        &emsp14;
        <label>D&iacuteas de duraci&oacuten:<input type="text" id="68" name="duracion_menstruacion" placeholder="Ingreselos aqui" size="15"></label>
        &emsp14;
        <label>&#191;Te has embarazado alguna vez?</label>
                <select name="select13" id="s13">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        <p></p>
        <label>&#191;Cu&aacutentas veces?<input type="text" id="71" name="veces_embarazo" placeholder="Ingreselas aqui" size="40"></label>
        &emsp14; &emsp14;
        <input type="text" id="72" name="parto" placeholder="Ingrese aqui si fue cesarea, parto, aborto o legrado" size="50">
        <p></p>
        <label>&#191;Utilizas alg&uacuten m&eacutetodo de planificaci&oacuten familiar?</label>
                <select name="select14" id="s14">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14; &emsp14; &emsp14;
        <label>&#191;Cu&aacutel?<input type="text" id="78" name="cual_metodo" placeholder="Ingresa el metodo aqui" size="50"></label>
        <p></p>
        <label>&#191;Te has realizado el papanicolaou?</label>
                <select name="select15" id="s1">
                        <option value="1"></option>
                        <option value="2">Si</option>
                        <option value="3">No</option>
               </select>
        &emsp14; &emsp14; &emsp14;
        <label>Hace cuanto tiempo:<input type="text" id="81" name="tiempo_papanicolaou" placeholder="Ingrese aqui el tiempo" size="51"></label>

        <br></br>

        <label>TRATAMIENTO MEDICO ACTUAL</label>
        <label><input type="text" id="82" placeholder="Ingrese descripcion" name="tratamiento_actual" size="82"></label>    
        

        
        <br></br>
        <br></br>
        <center>
         <button type="submit" id="83" value"Enviar" style='width:130px; height:50px' >Enviar</button>
         &emsp14; &emsp14; &emsp14; 
         <button type="reset" id="84" value"Borrar" style='width:130px; height:50px' >Reset</button>
        </center>
     </form>
   </div>
 </body>
</html>