<?php
session_start();//para iniciar sesiones
ini_set("display_errors",1);
$id_gestion = $_GET["id_gestion"];
include("../../clases/gestion.class.php");
$obj_gestion         = new gestion();
$var_resultado     = $obj_gestion->eliminarGestion($id_gestion);

if($var_resultado==1)
{
   
     header("Location: agregar.php");

}
else
{
   echo"se ha producido un problema al eliminar";
}
?>