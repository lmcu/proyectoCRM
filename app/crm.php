<?php
session_start();

echo "Ha iniciado sesion ".$_SESSION["ses_nombres_usuario"]." ".$_SESSION["ses_apellidos_usuario"];

?>
<hr>
<a href="gestiones/index.php">Gestiones</a>
<hr>
<a href="clientes/index.php">Clientes</a>
<hr>

