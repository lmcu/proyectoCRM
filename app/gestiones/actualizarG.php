<?php 
ini_set("display_errors",1);
$var_idG            =  $_GET["id_gestion"];
$var_rutUsuario         =  $_GET["rutUsuario"];
$var_rutCliente         =  $_GET["rutCliente"];
$var_idTipoG      =  $_GET["idTipoG"];
$var_resultado        =   $_GET["idResultado"];
$var_comentarios        =   $_GET["coment"];

?>

<html>
<head>
<title>Actualizar gestion</title>
</head>
<body>
    <h1>Actualizar gestion</h1>
    <hr>
    <form name ="frm_actualizar_gestion" action="actualizarG-dlm.php" method="post">
    <table>

  <tr>
             
             <td><input type="hidden" name="hdd_txt_idGestion" value="<?php echo $var_idG;?>"></td>
         </tr>
         <tr>
             <td><label>RUT USUARIO</label></td>
             <td><input type="text" name="txt_rutU" value="<?php echo $var_rutCliente;?>"></td>
         </tr>
        <tr>
             <td><label>RUT CLIENTE</label></td>
             <td><input type="text" name="txt_rut_cliente" value="<?php echo $var_rutCliente;?>"></td>
         </tr>
       <tr>
             <td><label>TIPO GESTIÓN</label></td>
             <td><input type="text" name="txt_tipo_gestion" value="<?php echo $var_idTipoG;?>"></td>
        </tr>
        <tr>
             <td><label>RESULTADO</label></td>
             <td><input type="text" name="txt_resultado_gestion" value="<?php echo $var_resultado;?>"></td>
         </tr>
        <tr>
             <td><label>COMENTARIOS</label></td>
            
             <td><input  type="text"  rows="4" cols="30" name="txt_comentarios" value="<?php echo $var_comentarios;?>"></td>
             
        </tr>
       
       
        <tr>
             <td></td>
             <td><input type="submit"  value="Actualizar"></td>
        </tr>

    

    </table>
    </form>
    </body>
    </html>
