<?php
$servidor ="localhost";
$usuario ="root";
$contraseña="";
$baseDeDatos ="bdinfo";

$enlace =mysqli_pconnect($servidor, $usuario, $contraseña, $baseDeDatos);
if(!$enlace){

	echo "Error en  la conexion con el servidor";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Tu info</title>
</head>
<body bgcolor="gray">
	
	<center><h1>Actualiza tus datos</h1></center>
<img src="imagenes\monge.jpg" height="20%" width="20%" >
	<form action="bdinfo.php" method="POST">

<div id="registro">
	<table>
		<tr>
		<td><label for="agente">Agente:</label>
		<td><input type="text" name="agentebdinfo" id="agente" placeholder="agente"></td>
		</tr>
		<tr>
		<td><label for="codigo"> codigo: </label></td>
		<td><input type="text" name="codigobdinfo" id="codigo" 	placeholder="codigo"></table></td>
		</tr>
		<tr>
		<td><label for="nombre"> Nombres:</label></td>
		<td><input type="text" name="nombrebdinfo" id="nombre" placeholder="nombres"></td>
		</tr>
		<tr>
		<td><label for="apellido" >Apellidos:</label></td>
		<td><input type="text" name="apellidobdinfo" id="apellido" placeholder="apellidos"></td>
		</tr>	
		<p><input type="submit" name="guardar" 	value="Guardar">
		<input type="reset" value="Modificar"></p>
	</table>
	</form>
	</div>
</body>
</html>

<?php 
if (isset($_POST['guardar'])) {

$insertarDatos ="INSERT INTO bdinfo VALUES ($agente', 
											'$codigo', 
											'$nombre', 
											'$apellido')":
$ejecutarinsertar=mysqli_query($enlace, $insertarDatos);

if ($ejecutarinsertar) {
	echo "error en la conexion";
}

}


?>
