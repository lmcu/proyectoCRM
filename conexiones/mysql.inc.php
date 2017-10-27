<?php
//ubicacion del servidor de base de datos
$servername = "localhost";
//usuario de base de datos
$username   = "app_crm";
//contraseña del usuario de la base de datos
$password   = "inacap.2017";
//nombre de la base de datos
$dbname     = "CRM";
//Creamos objetos de conexion a base de datos
$objetoMYSQL    = @new mysqli($servername,$username,$password,$dbname);
?>