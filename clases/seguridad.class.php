<?php
class seguridad{
    function verificarUsuarioClave($email,$clave){
        //Asignamos variables locales
        $var_email  = $email;
        $var_clave  = $clave;
        //Incluimos archivos de conexion a base de datos
        include("/var/www/html/crm/conexiones/mysql.inc.php");
        //Definimos consulta SQL a la base de datos
        $consultaSql    = "select 1 from usuario where email_usuario='$var_email' and clave_usuario = '$var_clave'";
        $objetoMYSQL->query($consultaSql);
        //Obtenemos los resultados
        $var_resultado = $objetoMYSQL->affected_rows;
        //Retornamos el resultado
        return $var_resultado;
    }
}
?>
