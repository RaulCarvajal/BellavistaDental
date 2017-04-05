<?php
error_reporting(E_ERROR|E_PARSE);
include ('conexion.php');
?>
<h2>Tus Citas</h2>


<!--SELECT fecha, hora, pac_nombre, asunto
from citas, pacientes
WHERE citas.idPacientes = pacientes.idPacientes
and citas.idDentistas=2 -->
<?php
$sql="select fecha, hora, pac_nombre, asunto
from citas, pacientes
where citas.idPacientes = pacientes.idPacientes
and citas.idDentista=2";

$result=mysql_query($sql);
while($array=mysql_fetch_array($result)){
    $arreglo[]=$array;
}
foreach ($arreglo as $row){
    echo("Fecha: ".$row['fecha']."<br>");
    echo("Hora: ".$row['hora']."<br>");
    echo("Paciente: ".$row['Nombre_paciente']."<br>");
    echo("Asunto: ".$row['asunto']."<br>");
}
?>

