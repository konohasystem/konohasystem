<?php

?>
<html>
    <head>
        <meta charset = "UTF-8"> 
        <title> EDITAR DATOS</title>
    </head>
    <body>
        <?php 
        foreach ($UnCliente->result() as $row){
          $rut = $row->rut;
          $nombre = $row->Nombre_C;
          $fecha = $row->Fecha;
          $telefono = $row->Telefono;
          $Direccion = $row->Direccion;
          $Marca = $row->Marca;
          $Modelo = $row->Modelo;
          $S_O = $row->S_O;
          $Accesorios = $row->Accesorios;
          $Componentes = $row->Componentes;
          $Problema = $row->Problema;
        }
        ?>
        <form action = "<?php echo base_url();?>index.php/ControladordatosCliente/editarCliente2/<?php echo $ideditarcliente ?>" method = "post">
            
            <center>
                <h1>EDITAR DATOS</h1>          
           <table>
                 <tr>
                    <td>Rut:</td>
                    <td><input type = "text" name = "inputRut" value="<?php echo $rut ?>"></td>
                 </tr>
                 <tr>
                    <td>Nombre Completo:</td>
                    <td><input type = "text" name = "inputNombre" value="<?php echo $nombre ?>"></td>
                 </tr>
                 <tr>
                    <td>Fecha:</td>
                    <td><input type = "date" name = "inputFecha" value="<?php echo $fecha ?>"></td>
                 </tr>
                 <tr>
                    <td>Teléfono:</td>
                    <td><input type = "text" name = "inputTelefono" value="<?php echo $telefono ?>"></td>
                 </tr>
                 <tr>
                    <td>Dirección:</td>
                    <td><input type = "text" name = "inputDireccion" value="<?php echo $Direccion ?>"></td>
                 </tr>
                 <tr>
                    <td>Marca:</td>
                    <td><input type = "text" name = "inputMarca" value="<?php echo $Marca ?>"></td>
                 </tr>
                 <tr>
                    <td>Modelo:</td>
                    <td><input type = "text" name = "inputModelo" value="<?php echo $Modelo ?>"></td>
                 </tr>
                 <tr>
                    <td>S.O:</td>
                    <td><input type = "text" name = "inputSistema" value="<?php echo $S_O ?>"></td>
                 </tr>
                 <tr>
                    <td>Accesorios:</td>
                    <td><textarea id="accesor" name = "inputAccesorios"><?php echo $Accesorios ?></textarea></td>
                 </tr>
                 <tr>
                    <td>Componentes:</td>
                    <td><textarea id="Components" type = "text" name = "inputComponentes"><?php echo $Componentes ?></textarea></td>
                 </tr>
                 <tr>
                    <td>Problema detallado:</td>
                    <td><textarea id="Problem" type = "text" name = "inputProblema"><?php echo $Problema ?></textarea></td>
                 </tr>
                 <tr>
                    <td><input type = "submit" value = "EDITAR"></td>
                 </tr>
            </table>
                
            </center>
        </form> 
        
    </body>
</html>


