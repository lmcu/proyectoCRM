
<?php
include("../../clases/clientes.class.php");
$obj_clientes         = new clientes();
$arregloClientes      = $obj_clientes->listarClientes();
$contarFilas          = count($arregloClientes);
ini_set("display_errors",1);


?>
<html>
<head>
<title>Agregar Clientes</title>
</head>
<body>
    <h1>Agregar clientes</h1>
    <hr>
    <form name ="frm_agregar_clientes" action="agregarClientes-dlm.php" method="post">
    <table>
    <a href="../../app/crm.php">Ir a menu principal</a>
        <tr>
             <td><label>RUT CLIENTE</label></td>
             <td><input type="text" name="txt_rutC"></td>
         </tr>
        <tr>
             <td><label>NOMBRE</label></td>
             <td><input type="text" name="txt_nombreC"></td>
        </tr>
        <tr>
             <td><label>APELLIDOS</label></td>
             <td><input type="text" name="txt_apellidosC"></td>
         </tr>
        <tr>
             <td><label>CELULAR</label></td>
              <td><input type="text" name="txt_fonoC"></td>
           
        </tr>
        <tr>
             <td><label>FECHA</label></td>
              <td><input type="text" name="txt_fechaC"></td>
           
        </tr>
        <tr>
             <td></td>
             <td><input type="submit" name="guardar" value="Guardar"></td>
        </tr>

    
        
       
    </table>

<table border="4">  

    <h1>Listar Clientes</h1>
		<tr>
		    <th>Rut</th>
			<th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Fecha</th>
            <th colspan="2">Acción</th>
			
		</tr>
        
         <?php
         $i=0;
         while($i< $contarFilas)
         {
        ?>
        <tr>
           
           <td><?php echo $arregloClientes[$i][0]; ?></td>
           <td><?php echo $arregloClientes[$i][1]; ?></td>
           <td><?php echo $arregloClientes[$i][2]; ?></td>
           <td><?php echo $arregloClientes[$i][3]; ?></td>
           <td><?php echo $arregloClientes[$i][4]; ?></td>

           <td><a href="eliminar-dlm.php?id_cliente=<?php echo $arregloClientes[$i][0]; ?>">Eliminar</a></td>
          
            
            <td>
            <a href="actualizar.php?
            id_rutCliente=<?php echo $arregloClientes[$i][0]; ?>
            &nombre=<?php echo $arregloClientes[$i][1]; ?>
            &apellidos=<?php echo $arregloClientes[$i][2]; ?>
            &fono=<?php echo $arregloClientes[$i][3]; ?>">Actualizar</a>
            </td>
           
		          
			
		</tr>

         <?php 
         $i++;
         } ; ?>
         
	
    </table>
    </form>
   
       
</body>

</html>
