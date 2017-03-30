<?php
include('controladores/controlador_login.php');
if(!verificar_usuario())
{

    header('location:../index.php');
}
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido Paciente</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../CSS/menuVerticalPaciente.css">
    <link rel="stylesheet" href="../CSS/styleIcons.css">
</head>
<body>
<h1>Bienvenido Paciente</h1>
<nav>
    <ul>
        <li><a href="#"><span><i class="icon icon-home"></i></span> Inicio </a></li>
        <li> <a href="/../Calendario/index.php"><span><i class="icon icon-address-book"></i></span>Citas</a> </li>
        <li> <a href="#"><span><i class="icon icon-file-text2"></i></span>Recetas</a></li>
        <li> <a href="controladores/salir.php"><span><i class="icon icon-cancel-circle"></i></span>Cerrar Sesión</a></li>
    </ul>
</nav>

</body>
</html>