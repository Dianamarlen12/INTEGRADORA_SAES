<?php

//conexion a la base
include("php/conexion_base.php");
 session_start();
 $persona = $_SESSION['CVE_PERSONA'];
?>
<!DOCTYPE html>
<html long="en">
<title>DOC | UTEC</title>
<head>
        <link type="text/css" href="css/doctora.css" rel="stylesheet"></link>
        <link type="text/css" href="css/index.css" rel="stylesheet"></link>
        <link rel="icon" href="imagenes/saes2.png"></link>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        
</head>
<body>
    <nav>
        <ul>
            <li><img src="imagenes/saes2.png" style="height:58px; width:60px" alt></li>
            <li><h2>SAES</h2></li>
            <li><a href="php/doctora.php"><h4>INICIO</h4></a></li>
            <li><a href="html/calendario_doc.html"><h4>EVENTOS</h4></a></li>
            <li><a href=""><h4>ESTADISTICAS</h4></a></li>
            <li><a href="html/login.html"><h4>SALIR</h4></a></li>
            <hr width=100%  align="center"  size=2 color="green">
            <form  action="php/busqueda.php" method="post">
                      <li><input type="search" id="miBusqueda" name="matricula"
                       placeholder="BUSCAR MATRICULA..."></li>
                      <li><button href="php/busqueda.php">Buscar</button></li>
                  </form>
        </ul>
        <div class="handle">
                    <p class="menu"></p>
                    <div class="menu_icon">
                      <div></div>
                      <div></div>
                      <div></div>
                    </div>
                </div>
    </nav>
    <section>
                <div class="container">
                    </div>
     </section>
        <div class="imagen">
                <img src="imagenes/HALCONINST.png" style="height:800px; width:650px" alt>
            </div>
<?php
$consulta= "SELECT DATOS_PERSONA.NOMBRE, DATOS_PERSONA.APE_PAT, DATOS_PERSONA.APE_MAT,DATOS_PERSONA.CVE_PERSONA,CVE_TIPO_USUARIO, CURP
FROM  USUARIO
INNER JOIN DATOS_PERSONA  ON DATOS_PERSONA.CVE_PERSONA = USUARIO.CVE_PERSONA WHERE DATOS_PERSONA.CVE_PERSONA= '$persona'";
$resultado = mysqli_query($conexion, $consulta);
?>

<div id="container">
    <h1>Datos Doctora</h1>
    <hr width=100%  align="center"  size=2 color="green">
    </br>
    </br>
    </br>
    
<?php
$cont=mysqli_num_rows($resultado);
if ($cont == 1){
    
    while($fila = mysqli_fetch_array ($resultado)){ ?> 
                <center>
                <table>
                <tr>
                <th><p><h3>NOMBRE:</h3></p></th>
                <td><?php echo $fila['NOMBRE'] ?></td>
                </tr>
                <tr>
                <th><p><h3>APELLIDO PATERNO:</h3></p></th>
                <td><?php echo $fila['APE_PAT'] ?></td>
                </tr>
                <tr>
                <th><p><h3>APELLIDO MATERNO:</h3></p></th>
                <td><?php echo $fila['APE_MAT'] ?></td>
                </tr>
                <tr>
                <th><p><h3>CURP:</h3></p></th>
                <td><?php echo $fila['CURP'] ?></td>
                </tr>
            
      

        <?php
       
    }
    
}else{
    echo "Sin registros";
}
?>

</table>
<script>
        $('.handle').on('click', function(){
            $('nav ul').toggleClass('showing');
        });
    </script>
    </br>
    </br>
    <footer>
        &copy; 2019 ELABORADO POR CREATE TECHNOLOGY
    </footer>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2KoK7MbOyxpgUVvAK/HJ2jigOSYS2auKPfzbm7uH60=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
