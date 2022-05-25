<?php
    $host = "sql102.260mb.net";
    $user = "sql102.260mb.nett";
    $clave = "AndyTaty";
    $bd = "n260m_31774738_tienda";
    $conexion=mysqli_connect('sql102.260mb.net','n260m_31774738','AndyTaty','n260m_31774738_tienda');
   // $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
?>