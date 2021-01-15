<?php
$conexion =mysqli_connect("localhost", "root", "", "formulario");
if (!$conexion){
    echo'Error al conectar la base de datos';
    }
    else {
        echo'base de datos conectada con exito';
    }
