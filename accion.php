<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$clave = $_POST['clave'];

if(empty($usuario)){

    echo "<script>";
    echo "alert('el campo usuario no puede estar vacio');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}
if(empty($email)){

    echo "<script>";
    echo "alert('el campo email no puede estar vacio');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
}

if(empty($clave)){

    echo "<script>";
    echo "alert('el campo clave no puede estar vacio');";
    echo "window.history.go(-1)";
    echo "</script>";
    die();
    
}

?>