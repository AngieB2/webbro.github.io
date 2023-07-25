<?php

include "conexion_contacto.php";

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$numero=$_POST["numero"];
$consulta=$_POST["consulta"];


$query = "INSERT INTO `consultas`(`nombre`, `apellido`, `correo`, `numero`, `consulta`) 
VALUES ('$nombre','$apellido''$correo','$numero','$consulta')";

$ejecutar = mysqli_query($conexion, $query);


?>