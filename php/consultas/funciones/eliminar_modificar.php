<?php 
include('../../conexion.php');
if($_GET['action']=="eliminar")
{
$id=$_GET['id'];
$sql="delete from pacientes where idPacientes='$id'";

if(mysql_query($sql))
{
    header("location:../../PrincipalAdministrador.php");
    echo("<script>window.alert('Registro eliminado correctamente')</script>");

}
else
{
echo('Error');
}


}


 ?>