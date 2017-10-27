<?php
session_start();//para iniciar sesiones
ini_set("display_errors",1);
$var_idCliente = $_GET["id_cliente"];
include("../../clases/clientes.class.php");
$obj_clientes         = new clientes();
$var_resultado     = $obj_clientes->eliminarCliente($var_idCliente);

if($var_resultado==1)
{
   
     header("Location: agregarClientes.php");

}
else
{
   echo"se ha producido un problema al eliminar";
}
?>
