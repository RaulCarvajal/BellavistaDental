
<?php 
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$telefono=$_GET['telefono'];
$sexo=$_GET['sexo'];
echo("<form method='post' action='consultas/funciones/modificar_paciente.php'>
 <h2>Datos del paciente</h2>
<input type='hidden' name='id' value='$id'>
<label>Nombre</label>	
<input type='text' name='nombre' value='$nombre'>
<label>Nombre</label>	
<input type='text' name='apelido' value='$apellido'>
<label>Nombre</label>	
<input type='text' name='correo' value='$correo'>
<label>Nombre</label>	
<input type='text' name='telefono' value='$telefono'>
<label>Nombre</label>	
<select name='sexo'>
  <option value='Femenino'>Femenino</option>
  <option value='Masculino'>Masculino</option>
 </select>
<input type='submit' value='modificar'>
</form>");

 ?>


