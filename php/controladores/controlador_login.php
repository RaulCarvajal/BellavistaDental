<?php

//recibimos los datos enviados desde el formulario
$usuario= $_POST['txtusuario'];
$contra= $_POST['txtcontra'];

if(isset($usuario)){
    $conex=mysql_connect("localhost","root","")
        or die("No se pudo realizar la conexion");
    mysql_select_db("proyectodental",$conex)
        or die("Error con la base de datos");

    //Inicio de variables de secion
    session_start();
}

?>