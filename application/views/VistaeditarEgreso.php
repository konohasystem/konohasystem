<?php

?>
<html>
    <head>
        <meta charset = "UTF-8"> 
        <title> EDITAR DATOS</title>
    </head>
    <body>
        <?php 
        foreach ($Id_egreso-> result() as $row){
          $fecha = $row->Fecha;
          $Diagnostico = $row->Diagnostico;
          $Solucion = $row->Solucion;
          $Servicio = $row->Servicio;
          $Costos = $row->Costos;
          $Total = $row->Total;

        }
        ?>
        <form action = "<?php echo base_url();?>index.php/ControladordatosEgreso/editarCliente2/<?php echo $idParaEditarCliente ?>" method = "post">
            
            <center>
                <h1>EDITAR DATOS</h1>          
           <table>
                 <tr>
                    <td>Fecha:</td>
                    <td><input type = "date" name = "inputFecha" value="<?php echo $fecha ?>"></td>
                 </tr>
                 <tr>
                    <td>Diagnostico:</td>
                    <td><textarea id="Diagnostico" name = "inputDiagnostico"><?php echo $Diagnostico ?></textarea></td>
                 </tr>
                 <tr>
                    <td>Solución:</td>
                    <td><textarea id="Solu" name = "inputSolucion"><?php echo $Solucion ?></textarea></td>
                 </tr>
                 <tr>
                    <td>Servicios realizados:</td>
                    <td><textarea id="Services" name = "inputServicios"><?php echo $Servicio ?></textarea></td>
                 </tr>
                 <tr>
                    <td>Costos:</td>
                    <td><input type = "text" name = "inputCostos" value="<?php echo $Costos ?>"></td>
                 </tr>
                 <tr>
                    <td>Total:</td>
                    <td><input type = "text" name = "inputTotal" value="<?php echo $Total ?>"></td>
                 </tr>
                 <tr>
                    <td><input type = "submit" value = "EDITAR"></td>
                 </tr>
            </table>
                
            </center>
        </form> 
        
    </body>
</html>
