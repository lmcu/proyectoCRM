<?php
ini_set("display_errors",1);
include("../../clases/gestion.class.php");
$obj_gestion= new gestion();
//este archivo muestra las variables en el formulario
    $var_id_gestion        = $_POST["hdd_txt_idGestion"];
    $var_usuario  = $_POST["txt_rutU"];
    $var_cliente       = $_POST["txt_rut_cliente"];
    $var_tipoGestion   = $_POST["txt_tipo_gestion"];
    $var_resultadoGestion  = $_POST["txt_resultado_gestion"];     
    $var_comentarios = $_POST["txt_comentarios"];




//hago lo mismo que en el archivo eliminar-dlm.php
//invoco el método
$var_resultado     = $obj_gestion->actualizarGestion($var_id_gestion,$var_usuario,$var_cliente,$var_tipoGestion,$var_resultadoGestion,$var_comentarios);

if($var_resultado==1)
{
   
     header("Location: agregar.php");

}
else
{
   echo"se ha producido un problema al actualizar";
}



?>