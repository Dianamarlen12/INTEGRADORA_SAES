<?php
$curp=$_POST['curp'];
$pass=$_POST['pass'];

//conexion a la base
$usuario = "id12972588_creative";
$contrasena = "w2>R<8Z79Kfny^*>";  //contraseña workbench
$servidor = "localhost";
$basededatos = "id12972588_creativesaes";


$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die ("No se ha podido conectar");
$db = mysqli_select_db( $conexion, $basededatos) or die ("upss! pues siempre no quizo conectar la base de datos");


$consulta= "SELECT CVE_PERSONA, CVE_TIPO_USUARIO FROM USUARIO WHERE CURP='$curp' AND PASS_TEMP='$pass'";
$resultado = mysqli_query($conexion, $consulta);
$fila= mysqli_fetch_array ($resultado);
$valor = $fila['CVE_TIPO_USUARIO'];

//validacion de usuario
if ($valor == 1) {
    ///iniciar sesion
    session_start(); 
    $_SESSION['CVE_PERSONA'] = $valor;
    header('location:php/doctora.php');
 }
else if ($valor == 2) {
    ///iniciar sesion
    session_start(); 
    $_SESSION['CVE_PERSONA'] = $valor;
    header('location:php/alumno.php');
 }
else{
      echo '<script type="text/javascript">alert("DATOS INGRESADOS INCORRECTOS, PORFAVOR VERIFICALOS");
     window.location.href="html/login.html";</script>';
 }

mysqli_close($conexion);

?>