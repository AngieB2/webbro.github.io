<?php
$conexion = mysqli_connect('localhost', 'root', '', 'contacto_registro');

 if ($conexion) {
    echo "Conectado exitosamente";
}else {
    echo "no se pudo conectar";
}  
?> 