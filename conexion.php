<?php

    $conexion = mysqli_connect('localhost','root','','umg');
    if(mysqli_connect_error()){
        die('No se puede conectar a la base de datos'.mysqli_connect_error());
    }   
?>


