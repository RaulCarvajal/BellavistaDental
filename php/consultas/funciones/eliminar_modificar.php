<?php 
include('../../conexion.php');
if($_POST['action']=="eliminar")
{
$id=$_POST['idUsuarios'];
//$sql="delete from pacientes where idPacientes='$id'";

//$sql="delete from usuarios  where idUsuarios='$id'";
    $sql="update  usuarios set Status='inactivo'  where idUsuarios='$id'";
/*
$sql= "delete from pacientes  p, usuarios u where p"
*/

if(mysql_query($sql))
{
    echo("El paciente ha sido desactivado-PrincipalAdmnistrador.php?action=verPacientes");
}
else
{
echo('Error');
echo(mysql_error());
}


}


 ?>