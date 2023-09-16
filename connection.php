<?php 
    // Connection to ddbb in localhost
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'radioaficionados';
    $connection = mysqli_connect($host, $user, $pass, $db);

    if(mysqli_connect_errno()) {
        printf('Conexion fallida: %sn', mysqli_connect_error());
        exit();
    }
?>