<?php
$link = mysql_connect("localhost","root", "") or die ("<h2> No se encuentra el servidor </h2>")
$db = mysql_select_db(bdinfo,$link) or die ("<h2> Error de conexion </h2>")

$agente = $_Post['agentebdinfo'];
$codigo =$_Post['codigobdinfo'];
$nombre = $_Post['nombrebdinfo'];
$apellido = $_Post['apellidobdinfo'];

$req = (strlen ($agente) *strlen($codigo) *strlen($nombre) *strlen($apellido) ) or die ("No se han completado todos los datos")

mysql_query("INSERT INTO bdinfo VALUES ($agente', '$codigo', '$nombre', '$apellido')", $link ) or die(<h2> error en enviar</h2>)

echo '<h1>Gracias</h1>
' ;

?>	
