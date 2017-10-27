<?php

class clientes{

function insertarClientes($rutCliente,$nombreCliente,$apellidoCliente,$celularCliente,$fecha_actualizacion){
date_default_timezone_set('America/santiago');
$var_rutCliente            =   $rutCliente;
$var_nombreCliente         =   $nombreCliente;
$var_apellidoCliente       =   $apellidoCliente;
$var_celularCliente  =   $celularCliente;
$var_fecha_actualizacion=   Date("Y-m-d H:i:s");
include("/var/www/html/crm/conexiones/mysql.inc.php");
// para eliminar debo cambiar la instruccion DELETE, para actualizar UPDATE
$insertarCliente="INSERT INTO clientes(rut_cliente,nombre_cliente,apellidos_cliente,celular_cliente,fecha_actualizacion_cliente)
VALUES('$var_rutCliente','$var_nombreCliente','$var_apellidoCliente','$var_celularCliente','$var_fecha_actualizacion') ";
 if($objetoMYSQL->query($insertarCliente) ==TRUE)
 {
     return 1;
 }else
 {
     //nos muestra el error
   $objetoMYSQL->error;
     return 0;
 }
 $objetoMYSQL->close();
}

function listarClientes()
{      
        include("/var/www/html/crm/conexiones/mysql.inc.php");
       $consultaSql    = "SELECT *FROM clientes";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array(
                        
                        $fila['rut_cliente'],
                        $fila['nombre_cliente'],
                        $fila['apellidos_cliente'],
                        $fila['celular_cliente'],
                        $fila['fecha_actualizacion_cliente']);
                    $i++;
                }
                return $arreglo;
            }else{
                echo"No se encontraron datos.";
            }
        }else{
            echo"No fue posible ejecutar la consulta";
        }
        $objetoMYSQL->close();
  }
  function eliminarCliente($id_cliente)
  {
   $var_idCliente = $id_cliente;
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    echo $eliminar    = "DELETE FROM clientes WHERE rut_cliente='$var_idCliente'";
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
  function actualizarCliente($rutCliente,$nombreCliente,$apellidoCliente,$celularCliente)
  {
    date_default_timezone_set('America/santiago');
    $rut_cliente   = $rutCliente;
    $nombre_cliente= $nombreCliente;
    $ape_cliente   = $apellidoCliente;
    $fono_cliente  = $celularCliente;
    $fecha_actualizacion=   Date("Y-m-d H:i:s");
    include("/var/www/html/crm/conexiones/mysql.inc.php");
    echo $actualizar    = "UPDATE clientes SET 
   
    nombre_cliente='$nombre_cliente',
    apellidos_cliente='$ape_cliente',
    celular_cliente='$fono_cliente',
    fecha_actualizacion_cliente='$fecha_actualizacion'
    WHERE rut_cliente='$rut_cliente'";

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
