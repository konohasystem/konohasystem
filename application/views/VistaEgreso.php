<?php

?>
<html>
    <style>
    #Formuno
        {
            margin-top: 30px;
            margin-left: 500px;
            
        }
        
        #Diagnostico
    {
            
            WIDTH: 228px; 
            HEIGHT: 98px
            
    }
        
    #Solu
    {
       WIDTH: 228px; 
       HEIGHT: 98px 
    }
    
    #Services
    {
        WIDTH: 228px; 
        HEIGHT: 98px
    }
     
    </style>
    <head>
        <meta charset = "UTF-8"> 
        <title> Egreso Datos</title>
    </head>
    <body>
        <form action = "<?php echo base_url();?>index.php/ControladordatosEgreso/EgresarDatos" method = "post">
            <div id="Formuno">
 
            <table>
                <h4>EGRESO DE LOS DATOS</h4>
                
                 <tr>
                    <td>Fecha:</td>
                    <td><input type = "date" name = "inputFecha"></td>
                 </tr>
                 <tr>
                    <td>Diagnostico:</td>
                    <td><textarea id="Diagnostico" name = "inputDiagnostico"></textarea></td>
                 </tr>
                 <tr>
                    <td>Solución:</td>
                    <td><textarea id="Solu" name = "inputSolucion"></textarea></td>
                 </tr>
                 <tr>
                    <td>Servicios realizados:</td>
                    <td><textarea id="Services" name = "inputServicios"></textarea></td>
                 </tr>
                 <tr>
                    <td>Costos:</td>
                    <td><input type = "text" name = "inputCostos"></td>
                 </tr>
                 <tr>
                    <td>Total:</td>
                    <td><input type = "text" name = "inputTotal"></td>
                 </tr>
                 <tr>
                    <td></td>
                    <td><input type = "submit"></td>
                 </tr>
            </table>
                
                </div>
           
        </form> 
        
    </body>
</html>
