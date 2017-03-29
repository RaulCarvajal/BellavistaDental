<?php 
include('../../conexion.php');
if($_GET['action']=="eliminar")
{
$id=$_GET['id'];
//$sql="delete from pacientes where idPacientes='$id'";

//$sql="delete from usuarios  where idUsuarios='$id'";
    $sql="update  usuarios set Status='inactivo'  where idUsuarios='$id'";
echo($sql);
/*
$sql= "delete from pacientes  p, usuarios u where p"
*/

if(mysql_query($sql))
{
    echo("<script>window.alert('Registro eliminado correctamente')</script>");
    header("location:../../PrincipalAdministrador.php?action=verPacientes");
}
else
{
echo('Error');
echo(mysql_error());
}


}


 ?>