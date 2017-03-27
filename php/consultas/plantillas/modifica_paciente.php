
<?php 
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$telefono=$_GET['telefono'];
$sexo=$_GET['sexo'];
echo("<form method='post' action='consultas/funciones/modificar_paciente.php'>
 <h2>Datos del paciente</h2>
<input type='hidden' name='id' value='$id' required>
<label>Nombre(s)</label>	
<input type='text' name='nombre' value='$nombre' required>
<label>Apeliido(s)</label>	
<input type='text' name='apelido' value='$apellido' required>
<label>Correo</label>	
<input type='text' name='correo' value='$correo' required>
<label>Telefeno</label>	
<input type='text' name='telefono' value='$telefono' required>
<label>Sexo</label>	
<select required name='sexo'>
  <option value=''>Selecciona uno</option>
  <option value='Femenino'>Masculino</option>
  <option value='Masculino'>Femenino</option>
 </select>
<input type='submit' value='modificar'>
</form>");

 ?>


