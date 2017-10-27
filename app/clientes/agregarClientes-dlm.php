<?php
session_start();//para iniciar sesiones
ini_set("display_errors",1);
//Capturamos datos del formulario recibidos mediante post
$rutUsuario        =   $_SESSION["ses_rut_usuario"];
$rutCliente      =   $_POST["txt_rutC"];
$nombreCliente      =   $_POST["txt_nombreC"];
$apellidoCliente  =   $_POST["txt_apellidosC"];
$celularCliente       =   $_POST["txt_fonoC"];
$fecha_actualizacion      =   $_POST["txt_fechaC"];

//incorporamos la clase gestion

include("../../clases/clientes.class.php");
//creamos un objeto de la clase
$obj_clientes=new clientes();
//invocamos el método agregar gestión
 $var_resultado = $obj_clientes->insertarClientes($rutCliente,$nombreCliente,$apellidoCliente,$celularCliente,$fecha_actualizacion);
 if($var_resultado==1)
{
    Header("Location: agregarClientes.php");

}else
{
    Header("Location: index.php");
}
?>
