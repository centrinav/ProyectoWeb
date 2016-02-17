<?php include("login_redirect.php"); ?>
<?php include("header_login.php"); ?>

<br>
<br>
<br>
<br>

<?php
//Si es que se redireccionó a esta página se verifica el estado y mensaje de la petición
if(isset($_GET["messagge"]) && isset($_GET["status"])){
    if($_GET["status"] == true){ ?>
        <div class="col-md-offset-2 col-md-6"><br>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $_GET["messagge"]; ?></strong>
            </div>
        </div>   
    <?php }else{ ?> 
        <div class="col-md-offset-2 col-md-6"><br>
            <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $_GET["messagge"]; ?></strong>
            </div>
        </div>  
<?php } }?>

<!--Contenido -->    
<div class="container" id="contenido">
    <div class="col-md-4">
        <br>
        <br>
        <br>
            <img src="img/otros/mascota.png" height="350" width="300">
        </div>
    <div class="col-md-8">
        <div class="col-md-offset-2 col-md-6">
            <h1 class="text-info text-center">Registro de usuario</h1>
            <div class="text-center" id="texto">Los campos con asterisco (*) son obligatorios</div>           
            
            <form id="frmRegister" method="post" action="register_pro.php" >
            <fieldset>
                <legend class="text-center"></legend>
                <div class="row form-group">
                    <label class="control-label">Nombres y Apellidos*</label>
                    <input name="name_lastname" id="name_lastname" type="text" class="form-control" placeholder="Nombres y Apellidos" >
                </div>
                <div class="row form-group">
                    <label class="control-label">Nombre de usuario*</label>
                    <input name="username" type="username" class="form-control" placeholder="Usuario" >
                </div>
                <div class="row form-group">
                    <label class="control-label">Contraseña*</label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" >
                </div>
                <div class="row form-group">
                    <label class="control-label">Repetir Contraseña*</label>
                    <input name="re_password" id="re_password" type="password" class="form-control" placeholder="Repita Contraseña" >
                </div>
                <div class="row"><br>
                    <button type="submit" class="btn btn-lg btn-block btn-primary " id="button_registro">Registrarse</button>
                </div><br>
            </fieldset>
            </form>
            <div class="text-center">
                <b><a href="login.php">< Regresar al Login</a></b> 
            </div>
        </div>
    </div>
</div>
    
    <!-- /.intro-header -->

    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <label id="follow">Síguenos en nuestras redes sociales: </label>
                    <a href="http://www.facebook.com/gelatosfera/"><img src="img/logo/fb.png" height="50" width="50"></a>
                    <a href="https://www.instagram.com/gelatosfera/"><img src="img/logo/instag.png" height="50" width="50"></a>
                </div>
                <div class="col-lg-3">
                    <p class="copyright text-muted small">Copyright &copy; Gelatosfera 2016.</p>
                </div>
            </div>
            
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $('#frmRegister').validate({
            rules: {
                name_lastname:{
                    required: true
                },    
                username: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                re_password:{
                    equalTo: "#password"
                }
            },
            highlight: function(element) {
                $(element).closest('.form-group').addClass('has-error').removeClass('has-success');
            },
            unhighlight: function(element) {
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            },
            errorElement: 'span',
            errorClass: 'help-block'
        });

</script>

