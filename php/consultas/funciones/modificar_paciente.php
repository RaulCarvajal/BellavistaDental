<?php 
include('../../conexion.php');
$nombre=$_POST['nombre'];
$apellido=$_POST['apelido'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];
$id=$_POST['id'];

$sql="update pacientes set Pac_nombre='$nombre',Pac_apellido='$apellido',Pac_correo='$correo',Pac_telefono='$telefono',Pac_sexo='$sexo'
      where idPacientes=$id";
      
 if(mysql_query($sql))
 {
     include('../../Mensaje.php');
     mensaje("registro modificado correctamente","index.php");

     echo("<script language='JavaScript'>
    
          
          //window.location.href='../../PrincipalAdministrador.php?action=verPacientes';
          </script>");



 }





 ?>