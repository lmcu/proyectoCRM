
<?php
ini_set("display_errors",1);
include("../../clases/clientes.class.php");
$obj_clientes= new clientes();
//este archivo muestra las variables en el formulario

$rut_cliente           =   $_POST["txt_rutC"];
$nombreCliente         =   $_POST["txt_nombreC"];
$apellidoCliente       =   $_POST["txt_apellidosC"];
$celularCliente        =   $_POST["txt_fonoC"];


//hago lo mismo que en el archivo eliminar-dlm.php
//invoco el método
$var_resultado     = $obj_clientes->actualizarCliente($rut_cliente,$nombreCliente,$apellidoCliente,$celularCliente);

if($var_resultado==1)
{
   
     header("Location: agregarClientes.php");

}
else
{
   echo"se ha producido un problema al actualizar";
}



?>