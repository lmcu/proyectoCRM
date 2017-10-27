
<?php
include("../../clases/gestion.class.php");
$obj_gestion      = new gestion();
$arregloGestion   = $obj_gestion ->listarGestion();
$contarFilas      =  count($arregloGestion);
ini_set("display_errors",1);

?>


<html>
<head>
<title>Agregar gestion</title>
</head>
<body>
    <h1>Agregar Gestión</h1>
    <hr>
    <form name ="frm_agregar_gestion" action="agregar-dml.php" method="post">
   
    <table>
    <a href="../../app/crm.php">Ir a menu principal</a>
   
       
        <tr>
             <td><label>RUT CLIENTE</label></td>
             <td><input type="text" name="txt_rut_cliente"></td>
         </tr>
        <tr>
             <td><label>TIPO GESTIÓN</label></td>
             <td><input type="text" name="txt_tipo_gestion"></td>
        </tr>
        <tr>
             <td><label>RESULTADO</label></td>
             <td><input type="text" name="txt_resultado_gestion"></td>
         </tr>
                
         <tr>
             <td><label>COMENTARIOS</label></td>
             <td>
             <textarea name="txt_comentarios" rows="4" cols="22"></textarea>
             </td>
        </tr>
        <tr>
             <td></td>
             <td><input type="submit" name="guardar" value="Guardar gestión"></td>
        </tr>
       
    </table>
     <table border="4">  

    <h1>Listar Gestiones</h1>
        <tr>
            <th>ID</th>
            <th>Rut usuario</th>
            <th>Rut cliente</th>
            <th>ID Tipo gestion</th>
            <th>ID Resultado</th>
            <th>Comentarios</th>
            <th>Fecha</th>
            
            <th colspan="2">Accion</th>
            
        </tr>
        
         <?php
         $i=0;
         while($i< $contarFilas)
         {
        ?>
        <tr>
           <td><?php echo $arregloGestion[$i][0]; ?></td>
           <td><?php echo $arregloGestion[$i][1]; ?></td>
           <td><?php echo $arregloGestion[$i][2]; ?></td>
           <td><?php echo $arregloGestion[$i][3]; ?></td>
           <td><?php echo $arregloGestion[$i][4]; ?></td>
           <td><?php echo $arregloGestion[$i][5]; ?></td>
           <td><?php echo $arregloGestion[$i][6]; ?></td>
           

           <td><a href="eliminar-dlm.php?id_gestion=<?php echo $arregloGestion[$i][0]; ?>">Eliminar</a></td>
            <td>
            <a href="actualizarG.php?
            id_gestion=<?php echo $arregloGestion[$i][0]; ?>
            &rutUsuario=<?php echo $arregloGestion[$i][1]; ?>
            &rutCliente=<?php echo $arregloGestion[$i][2]; ?>
            &idTipoG=<?php echo $arregloGestion[$i][3]; ?>
            &idResultado=<?php echo $arregloGestion[$i][4]; ?>
            &coment=<?php echo $arregloGestion[$i][5]; ?> ">Actualizar</a>
            </td>
                  
            
        </tr>

         <?php 
         $i++;
         } ; ?>
         
    
    </table>



    </form>
</body>
</html>
