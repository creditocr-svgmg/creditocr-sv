<?php

$link = mysql_connect("localhost","root"," ") or die ("<h2>No se encuentra coneccion con el servidor</h2>");;
$db = mysql_select_db("bdinfo", $link) or die ("<h2>No se encuentra coneccion con el servidor</h2>")
$agente=$_POST['agente'];
$nombre = $_Post['nombre'];
$apellido = $_Post['apellido'];
$cod =$_Post['cod'];

mysql_query("INSERT INTO bdinfo VALUES (' ', '$agente', '$nombre', '$apellido', '$cod')",$link) or die(<h2> error en enviar</h2>)

echo "<h1>vamos revisa tu informacion</h1>";
echo "el agente recibido es :" . $agente . "<br></br>;
echo "el nombre recibido es :" . $nombre . "<br></br>;
echo "el apellido recibido es :" . $apellido . "<br></br>;
echo "el cod recibido es :" . $cod . "<br></br>;
?>