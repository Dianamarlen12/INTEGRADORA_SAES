
<?php
$matricula=$_POST['matricula'];
//conexion a la base
 include("php/conexion_base.php");

$consulta= "SELECT P.CVE_PERSONA, P.NOMBRE, P.APE_PAT, P.APE_MAT, A.MATRICULA 
FROM  ALUMNO A
INNER JOIN DATOS_PERSONA P ON P.CVE_PERSONA = A.CVE_ALUMNO
WHERE A.MATRICULA LIKE '%".$matricula."%'
ORDER BY P.CVE_PERSONA ;";
$resultado = mysqli_query($conexion, $consulta);
?>
<title>SEARCH | UTEC </title>
<link rel="icon" href="imagenes/saes2.png"></link>
<link type="text/css" href="css/busqueda.css" rel="stylesheet"></link>
<div id="comtainer">
    <a href="php/doctora.php">REGRESAR</a>
</div>
<center>
</br>
</br>
<table border=1>
    <tr>
        <td>MATRICULA</td>
        <td>NOMBRE</td>
        <td>APELLIDO PATERNO</td>
        <td>APELLIDO MATERNO</td>
        <td>ACCION</td>
        <td>ACCION</td>
</tr>
<?php
$cont=mysqli_num_rows($resultado);
if ($cont > 0){
    while($fila = mysqli_fetch_array ($resultado)){
        ?>
        
            <tr>
                <td><?php echo $fila['MATRICULA'] ?></td>
                <td><?php echo $fila['NOMBRE'] ?></td>
                <td><?php echo $fila['APE_PAT'] ?></td>
                <td><?php echo $fila['APE_MAT'] ?></td>
                <td><button value=<?php echo $fila['CVE_PERSONA'] ?> name="historial" onclick="location.href='historia_llena.html'">HISTORIAL CLINICO</button></td>
                <td><button value=<?php echo $fila['CVE_PERSONA'] ?> name="historial" onclick="location.href='nota_evolucion.html'">NOTA MEDICA</button></td>
            <tr>

        <?php
       
    }
    
}else{
    echo "Sin registros";
}