<?php
$usuario = "id12972588_creative";
$contrasena = "w2>R<8Z79Kfny^*>";  //contraseña workbench
$servidor = "localhost";
$basededatos = "id12972588_creativesaes";

$conexion = mysqli_connect( $servidor, $usuario, $contrasena) or die ("No se ha podido conectar");
$db = mysqli_select_db( $conexion, $basededatos) or die ("upss! pues siempre no quizo conectar la base de datos");
?>