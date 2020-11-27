
<link href = "//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src = "//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<link href = "<?php echo base_url() ?>assets/css/menu.css" rel="stylesheet" type="text/css"/>
<script src = "//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<div class = "container">
    
    <img src = "<?php echo base_url() ?>assets/img/Logo.jpg" width="150px">
    <div class = "row">
        <div>
            <ul class = "nav">
                <li><a href = "<?php echo base_url() ?>index.php/ControladordatosCliente">Realizar Ingreso</a></li> 
                <li><a href = "<?php echo base_url() ?>index.php/ControladordatosEgreso">Realizar Egreso</a></li> 
                <li><a href = "<?php echo base_url() ?>index.php/ControladordatosCliente/MostrarCliente">Mostrar Ingresos</a></li>
                <li><a href = "<?php echo base_url() ?>index.php/ControladordatosEgreso/MostrarEgreso">Mostrar Egresos</a></li>
                <li><a href = "<?php echo base_url() ?>index.php/ControladorLogin/VerPerfil" >Ver Perfil</a>
                    <ul class = "sub">
                        <li><a href = "<?php echo base_url('index.php/ControladorLogin/off_line')?>">Cerrar Sesión</a></li> 
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>