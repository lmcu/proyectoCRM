<?php
class gestion
{
function insertarGestion($usuario,$cliente,$tipo_gestion,$resultado_gestion,$comentarios)
{
date_default_timezone_set('America/santiago');
$var_usuario            =   $usuario;
$var_cliente            =   $cliente;
$var_tipo_gestion       =   $tipo_gestion;
$var_resultado_gestion  =   $resultado_gestion;
$var_comentarios        =   $comentarios;
$var_fecha_actualizacion=   Date("Y-m-d H:i:s");

include("/var/www/html/crm/conexiones/mysql.inc.php");
// para eliminar debo cambiar la instruccion DELETE, para actualizar UPDATE

echo $insertar="INSERT INTO 
gestion(rut_usuario,
rut_cliente,
id_tipo_gestiones,
id_resultado_gestion,
comentarios,
fecha_actualizacion)
VALUES('$var_usuario',
'$var_cliente',
'$var_tipo_gestion',
'$var_resultado_gestion',
'$var_comentarios',
'$var_fecha_actualizacion') ";
 if($objetoMYSQL->query($insertar) ==TRUE)
 {
     return 1;
 }else
 {
     //nos muestra el error
   echo $objetoMYSQL->error;
     return 0;
 }
 $objetoMYSQL->close();
}

function listarGestion()
{      
        include("/var/www/html/crm/conexiones/mysql.inc.php");
       $consultaSql    = "SELECT *FROM gestion";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array(
                        $fila['id_gestion'],
                        $fila['rut_usuario'],
                        $fila['rut_cliente'],
                        $fila['id_tipo_gestiones'],
                        $fila['id_resultado_gestion'],
                        $fila['comentarios'],
                        $fila['fecha_actualizacion']);
                    $i++;
                }
                return $arreglo;
            }else{
                echo"No se encontraron datos.";
            }
        }else{
            echo"No fué posible ejecutar la consulta";
        }
        $objetoMYSQL->close();
  }

function eliminarGestion($id_gestion)
  {
   $var_idGestion = $id_gestion;
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    echo $eliminar    = "DELETE FROM gestion WHERE id_gestion='$var_idGestion'";
     if($objetoMYSQL->query($eliminar) ==TRUE)
 {
     return 1;
 }else
 {
     //nos muestra el error
   $objetoMYSQL->error;
     return 0;
 }
  }
  function actualizarGestion($idGestion,$usuario,$cliente,$tipo_gestion,$resultado_gestion,$comentarios)
  {
    
    $id_gestion   = $idGestion;
    $var_usuario= $usuario;
    $var_cliente= $cliente;
    $var_tipoGestion   = $tipo_gestion;
    $var_resultadoGestion  = $resultado_gestion;   
    $var_comentarios = $comentarios;
    include("/var/www/html/crm/conexiones/mysql.inc.php");

    echo $actualizar    = "UPDATE gestion SET 
    rut_usuario='$var_usuario',
    rut_cliente='$var_cliente',
    id_tipo_gestiones='$tipo_gestion',
    id_resultado_gestion='$resultado_gestion',     
    comentarios='$var_comentarios'
    WHERE id_gestion='$id_gestion'";

   if($objetoMYSQL->query($actualizar) ==TRUE)
   {
     // si funciona resulta 1
     return 1;
   }else
   {
     // si es cero no resulta
     //nos muestra el error
    $objetoMYSQL->error;
     return 0;



   }
   }

}
?>
