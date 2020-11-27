<?php ?>
<html>
    <head>
        <meta charset = "UTF-8"> 
        <title>Ver Perfil</title>
    </head>
        <style>
            .header {
                text-align: left;
                height: 300px;
                margin-left: 150px;
                margin-top: 50px;
            }
            
            .img {
                width: 100px;
                height: 100px;
                border-radius: 50%;
            }
            
            .letter {
                height: 20px;
            }
            
            .datos {
                margin-left: 350px;
            }
            
            .Datos{
                margin-left: 245px;
                margin-top: 30px;
            }
            
            .DatosNombre {
                margin-left: 320px;
                margin-top: 10px;
            }
            
            .DatosRut {
                margin-top: 50px;
                margin-left: 430px; 
            }
            
            .cuadro {
                margin-left: 20px;
            }
            
        </style>
    <body>
        <?php 
        foreach ($usuario-> result() as $row){
            $rut = $row->rut;
            $nombre = $row->Nombre_Completo;
            $cargo = $row->Cargo;
                    
        
            
        }
        ?>
        <div class="header">
            <img class="img" src="../../assets/img/descarga.png" alt=""/>
            
            <label class="Datos" for="idCargo">Cargo Usuario:</label>
            <input class="cuadro" type="text" size="30" maxlength="30" value="<?php echo $cargo ?>" name="Cargo" readonly="readonly">
            <br>
            <label class="DatosNombre" for="idnombre">Nombre Completo:</label>
            <input class="cuadro" type="text" size="30" maxlength="30" value="<?php echo $nombre ?>" name="Name" readonly="readonly">
            <br>
            <label class="DatosRut" for="idRut">Rut:</label>
            <input class="cuadro" type="text" size="30" maxlength="30" name="Ruh" readonly="readonly" value="<?php echo $rut ?>">
        </div>
            
    </body>
</html>

