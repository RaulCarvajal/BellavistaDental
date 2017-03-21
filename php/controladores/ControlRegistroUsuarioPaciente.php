<?php

include('../conexion.php');
$txtuser=$_POST['txtuser']; /*nombre para iniciar sesión tabla usuarios*/
$txtcontrasena=$_POST['txtcontrasena'];
//TABLA PACIENTES
$txtnombrepac=$_POST['txtnombrepac'];
$txtapellido=$_POST['txtapellido'];
$txtcorreo=$_POST['txtcorreo'];
$txttelefono=$_POST['txttelefono'];
$txtfecnac=$_POST['txtfecnac'];
$sexo=$_POST['sexo'];

//como hacer una variable autoincrementable sin necesidad
$sql="insert into Usuarios(Contrasena, Nombre_Usuario, FechaRegistro )
	values ('$txtcontrasena','$txtuser', now() )";

if(mysql_query($sql)){

    echo "se importaron a la tabla Usuarios";
}
$sql2= "select idUsuarios from Usuarios order by FechaRegistro desc limit 1";


$resultado=mysql_query($sql2);

while ($arreglo=mysql_fetch_array($resultado)) {
    $idUsuario=$arreglo['idUsuarios'];

    $sql3="insert into Pacientes (Pac_Nombre, Pac_Apellido, Pac_correo, Pac_telefono, Pac_FecNac, Pac_sexo,idUsuarios)
		values ('$txtnombrepac','$txtapellido','$txtcorreo','$txttelefono','$txtfecnac','$sexo',$idUsuario)";
    //echo $sql3;
    mysql_query($sql3);
    if(mysql_query($sql3)){
        echo " se importaron a la tabla pacientes";
    }
    else {echo " ERROR";}
}
?>