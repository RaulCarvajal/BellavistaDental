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

    //Consulta si los datos estan en la base
    $consulta= "SELECT * FROM usuarios WHERE Nombre_Usuario='$Nombre_Usuario' AND Contrasena='$Contrasena'";
    $resultado= mysql_query($consulta,$conex) or die (mysql_error());
    $fila=mysql_fetch_array($resultado);

    //Si el usuario no existe o los datos son incorrectos
    if(!$fila['id']){
        header("location:index.php");
    }//Si el usuario no existe o los datos son incorrectos

    else{

    }
}

?>