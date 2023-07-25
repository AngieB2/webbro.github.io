<?php

include "conexionbd.php";

$nombre=$_POST["nombre"];
$correo=$_POST["correo"];
$usuario=$_POST["usuario"];
$clave=$_POST["clave"];
$conclave=$_POST["conclave"];

$query="INSERT INTO `usuarios`(`nombre`, `correo`, `usuario`, `clave`, `conclave`) 
VALUES ('nombre','correo','usuario','clave','conclave')";


$ejecutar = mysqli_query($conexion, $query);
?>