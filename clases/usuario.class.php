<?php
class usuario{
    function obtenerDatosUsuario($email){
        $var_email=$email;
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        $consultaSql    = "SELECT rut_usuario,nombre_usuario,apellidos_usuario FROM usuario WHERE email_usuario='$var_email'";
        if($resultado = $objetoMYSQL->query($consultaSql)){
            if($objetoMYSQL->affected_rows>0){
                $i=0;
                while($fila = $resultado->fetch_assoc()){
                    $arreglo[$i]=array($fila['rut_usuario'],$fila['nombre_usuario'],$fila['apellidos_usuario']);
                    $i++;
                }
                return $arreglo;
            }else{
                echo"No se encontrarón datos.";
            }
        }else{
            echo"No fué posible ejecutar la consulta";
        }
        $objetoMYSQL->close();
            }
}
?>
