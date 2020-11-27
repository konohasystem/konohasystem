<?php

?>
<html>
    <style>
    #Formuno
        {
            margin-top: 30px;
            margin-left: 500px;
            
        }
        
    #accesor
    {
            
            WIDTH: 228px; 
            HEIGHT: 98px
            
    }
        
    #Components
    {
       WIDTH: 228px; 
       HEIGHT: 98px 
    }
    
    #Problem
    {
        WIDTH: 228px; 
        HEIGHT: 98px
    }
     
    </style>
    <head>
        <meta charset = "UTF-8"> 
        <title> Ingreso Datos</title>
    </head>
    <body>
        <form action = "<?php echo base_url();?>index.php/ControladordatosCliente/IngresarDatos" method = "post">
            <div id="Formuno">
 
            <table>
                <h4>INGRESE LOS DATOS</h4>
                
                 <tr>
                    <td>Rut:</td>
                    <td><input type = "text" name = "inputRut"></td>
                 </tr>
                 <tr>
                    <td>Nombre Completo:</td>
                    <td><input type = "text" name = "inputNombre"></td>
                 </tr>
                 <tr>
                    <td>Fecha:</td>
                    <td><input type = "date" name = "inputFecha"></td>
                 </tr>
                 <tr>
                    <td>Teléfono:</td>
                    <td><input type = "text" name = "inputTelefono"></td>
                 </tr>
                 <tr>
                    <td>Dirección:</td>
                    <td><input type = "text" name = "inputDireccion"></td>
                 </tr>
                 <tr>
                    <td>Marca:</td>
                    <td><input type = "text" name = "inputMarca"></td>
                 </tr>
                 <tr>
                    <td>Modelo:</td>
                    <td><input type = "text" name = "inputModelo"></td>
                 </tr>
                 <tr>
                    <td>S.O:</td>
                    <td><input type = "text" name = "inputSistema"></td>
                 </tr>
                 <tr>
                    <td>Accesorios:</td>
                    <td><textarea id="accesor" name = "inputAccesorios"></textarea></td>
                 </tr>
                 <tr>
                    <td>Componentes:</td>
                    <td><textarea id="Components" type = "text" name = "inputComponentes"></textarea></td>
                 </tr>
                 <tr>
                    <td>Problema detallado:</td>
                    <td><textarea id="Problem" type = "text" name = "inputProblema"></textarea></td>
                 </tr>
                 <tr>
                    <td
                    <td><input type = "submit"></td>
                 </tr>
            </table>
                
                </div>
           
        </form> 
        
    </body>
</html>
