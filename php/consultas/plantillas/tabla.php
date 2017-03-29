<?php 
include('conexion.php');
$sql="select idPacientes,Pac_nombre,Pac_apellido,Pac_correo,Pac_telefono,Pac_FecNac,Pac_sexo, pacientes.idUsuarios from pacientes
 inner join usuarios 
 on usuarios.idUsuarios=pacientes.idUsuarios
 where Status like 'activo'";
$result =mysql_query($sql);
while($array=mysql_fetch_assoc($result))
{
$arreglo[]=$array;
}
echo ("<select onchange='window.location=this.options[this.selectedIndex].value'>
  <option>Filtrar por</option>
  <option value='index.php?action=reparacion_registros&&parametroFiltro=generador'>Activos</option>
  <option value='index.php?action=reparacion_registros&&parametroFiltro=transductor'>Inactivos</option>
  </select>");

echo("<table>
	   <thead>
 <tr>
	<th>Nombre</th>
	<th>Apellido</th>
	<th>Correo</th>
	<th>Telefono</th>
	<th>Fecha de nacimiento</th>
	<th>Sexo</th>
	<th>Eliminar</th>
	   </thead>
</tr>");
foreach ($arreglo as $row)
{
 echo"<tr>
      <td>".$row['Pac_nombre']."</td>
      <td>".$row['Pac_apellido']."</td>
      <td>".$row['Pac_correo']."</td>
      <td>".$row['Pac_telefono']."</td>
       <td>".$row['Pac_FecNac']."</td>
        <td>".$row['Pac_sexo']."</td>
      <td><a href='consultas/funciones/eliminar_modificar.php?action=eliminar&id=".$row['idUsuarios']."'>Eliminar</a></td>
      <td><a href='PrincipalAdministrador.php?action=modificar_paciente&id=".$row['idPacientes']."&nombre=".$row['Pac_nombre']."&apellido=".$row['Pac_apellido']."&correo=".$row['Pac_correo']."&telefono=".$row['Pac_telefono']."&sexo=".$row['Pac_sexo']."'>Modificar</a></td>
      </tr>";
}

echo("</table>");
?>



