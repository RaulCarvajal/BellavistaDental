<?php 
include('../../conexion.php');
if($_GET['action']=="eliminar")
{
$id=$_GET['id'];
$sql="delete from pacientes where idPacientes='$id'";

if(mysql_query($sql))
{
echo("Registro eliminado correctamente");
}
else
{
echo('Error');
}


}


 ?>