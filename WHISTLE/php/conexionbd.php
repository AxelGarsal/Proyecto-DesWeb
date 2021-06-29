<?php
    $conexion = mysqli_connect("localhost", "root", "", "registrowhistle");

    //para verificar la conexion
    if($conexion){
        echo 'coneccion exitosa a la Base de Datos';
    }else{
        echo 'No se ha podido conectar a la Base de Datos ';
    }
