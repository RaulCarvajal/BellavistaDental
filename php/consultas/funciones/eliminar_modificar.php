<?php 
include('../../conexion.php');
if($_GET['action']=="eliminar")
{
$id=$_GET['id'];
$sql="delete from pacientes where idPacientes='$id'";

//$sql="delete from pacientes p, usuarios u
// where p.idUsuarios='$id' and u.IdUsuarios='$id'";

if(mysql_query($sql))
{
    echo("<script>window.alert('Registro eliminado correctamente')</script>");
    header("location:../../PrincipalAdministrador.php?action=verPacientes");
}
else
{
echo('Error');
}


}


 ?>