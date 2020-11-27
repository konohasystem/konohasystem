
<link href="<?php echo base_url() ?>assets/css/login.css" rel="stylesheet" type="text/css"/>

<style>
    #password{
        width: 380px;
        
        height: 50px;
        
        text-align: center;
        
        border-radius: 100px;
        
        background-color: #eee;
    
        border: 0;
        
        font-size: 14px;
    }
    #usuario{
        
        border-radius: 100px;
        
        background-color: #eee;
    
        border: 0;
</style>
<div class="wrapper fadeInDown">
    <div id="formContent">

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="<?php echo base_url() ?>assets/img/Logo.jpg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <form id="formulario_login" action="<?php echo base_url() ?>index.php/ControladorLogin/login" method="post">
            <input type="text" id="usuario" class="fadeIn second" name="usuario" placeholder="Rut">
            <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña">
            <input type="submit" class="fadeIn fourth" value="Iniciar Sesión">
        </form>

    </div>
</div>
<script src="<?php echo base_url() ?>assets/js/jquery.js"></script>

<script type="text/javascript">




   
    // ------------------------------------------------------------------

    $("#formulario_login").submit(function (event) {
        event.preventDefault();

        var error = '';
        var usuario = $('#usuario').val().trim();
        var clave = $('#password').val();
        var url_base = '<?php echo base_url() ?>';

        console.log(url_base);

        if (usuario === '') {
            error += '- INGRESAR SU RUT SIN PUNTOS NI GUION \n';
        }

        if (clave === '') {
            error += '- INGRESAR LA CLAVE DE ACCESO \n';
        }

        if (error === '') {
            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: $(this).serialize(),
                success: function (resp)
                {
                    if (resp === "0") {
                        alert('CREDENCIALES INVALIDAS');

                        
                        $('#usuario').focus();
                    } else {
                        alert("INGRESO CORRECTO");
                        window.location.href = url_base + 'index.php/ControladordatosCliente/MostrarCliente';
                        // alert(resp);
                    }
                }
            });
        } else {
            alert('COMPLETA TODOS LOS CAMPOS: \n' + error);
        }
    });




</script>         



