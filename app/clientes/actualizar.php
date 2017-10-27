<?php 
ini_set("display_errors",1);
$var_rutCliente            =  $_GET["id_rutCliente"];
$var_nombreCliente         =  $_GET["nombre"];
$var_apellidoCliente       =  $_GET["apellidos"];
$var_celularCliente        =   $_GET["fono"];

?>

<html>
<head>
<title>Actualizar gestiones</title>
</head>
<body>
    <h1>Actualizar gestiones</h1>
    <hr>
    <form name ="frm_actualizar_clientes" action="actualizar-dlm.php" method="post">
    <table>

        <tr>
             <td><label>RUT CLIENTE</label></td>
             <td><input type="hidden" name="txt_rutC" value="<?php echo $var_rutCliente;?>"></td>
         </tr>
        <tr>
             <td><label>NOMBRE</label></td>
             <td><input type="text" name="txt_nombreC" value="<?php echo $var_nombreCliente;?>"></td>
        </tr>
        <tr>
             <td><label>APELLIDOS</label></td>
             <td><input type="text" name="txt_apellidosC" value="<?php echo $var_apellidoCliente;?>"></td>
         </tr>
        <tr>
             <td><label>CELULAR</label></td>
              <td><input type="text" name="txt_fonoC" value="<?php echo $var_celularCliente;?>"></td>
           
        </tr>
       
        <tr>
             <td></td>
             <td><input type="submit"  value="Actualizar"></td>
        </tr>

    

    </table>
    </form>
    </body>
    </html>
