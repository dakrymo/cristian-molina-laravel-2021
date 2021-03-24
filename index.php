<?php

require_once('database.php');
  ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr >
		<td>No</td>
		<td>Codigo</td>
		<td>Nombre</td>
		<td>Lugar de Nacimiento</td>
		<td>Fecha de nacimiento</td>
		<td>Telefono</td>
		<td>Cargo</td>
		<td>Estado</td>
		<td>Actualizar</td>
		<td>Eliminar</td>
		

	</tr>
	
<?php

$cliente = $mysqli->query("SELECT * FROM empleado");
$empleado = $cliente->fetch_array(MYSQLI_BOTH);

while ($empleado != NULL){

echo "<tr>";
echo "<td>".$empleado['id']."</td>";
echo "<td>".$empleado['codigo']."</td>";
echo "<td>".$empleado['nombre']."</td>";
echo "<td>".$empleado['lugar_de_nacimiento']."</td>";
echo "<td>".$empleado['fecha_de_nacimiento']."</td>";
echo "<td>".$empleado['telefono']."</td>";
echo "<td>".$empleado['cargo']."</td>";
echo "<td>".$empleado['estado']."</td>";
echo '<td><a href=>Actualizar</a></td>';
echo '<td><a href=>Eliminar</a></td>';
echo "</tr>";
$empleado = $cliente->fetch_array(MYSQLI_BOTH);

}

  ?>

</table>



</body>
</html>