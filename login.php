<?php 
//iniciamos variables de sesion
session_start();
//mostramos por pantalla los errores
ini_set("display_errors",1);
//incluimos la clase de <seguridad class="class php
include("clases/seguridad.class.php");
include("clases/usuario.class.php");
//creamos objetos de la clase seguridad
$obj_seguridad  = new seguridad();
$obj_usuario    = new usuario();

$var_email = $_POST["email_usuario"];
$var_clave = $_POST["clave_usuario"];


//invocamos metodos para verificar accesos

$var_resultado  = $obj_seguridad->verificarUsuarioClave($var_email,$var_clave);


if($var_resultado==1){
  
  $var_datos_usuario    =   $obj_usuario->obtenerDatosUsuario($var_email);
  $var_rut              =   $var_datos_usuario[0][0];
  $var_nombres          =   $var_datos_usuario[0][1];
  $var_apellidos        =   $var_datos_usuario[0][2];

  //creamos variables de sesion con los datos obtenidos
  $_SESSION["ses_rut_usuario"]       =    $var_rut;
  $_SESSION["ses_nombre_usuario"]    =   $var_nombres;
  $_SESSION["ses_apellidos_usuario"]  =   $var_apellidos;
  //Redireccionamos
  header("Location:app/crm.php");
}else{
    header("Location:index.php");

}


?>