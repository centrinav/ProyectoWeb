<?php include("login_redirect.php"); ?>
<?php include("header_login.php"); ?>

<?php
//Si es que se redireccionó a esta página se verifica el estado y mensaje de la petición
if(isset($_GET["messagge"]) && isset($_GET["status"])){
    if($_GET["status"] == true){ ?>
        <div class="col-md-offset-4 col-md-4"><br>
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $_GET["messagge"]; ?></strong>
            </div>
        </div>   
    <?php }else{ ?> 
        <div class="col-md-offset-4 col-md-4"><br>
            <div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <strong><?php echo $_GET["messagge"]; ?></strong>
            </div>
        </div>  
<?php } }?>

        
        <script src="libs/media/js/jquery/jquery-1.11.1.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/media/js/jquery/jquery.validate.js"></script>
        <script src="libs/media/js/jquery/jquery.validate.min.js"></script>  
        <script src="libs/media/js/globalfunctions.js"></script> 
    
    <div class="container" id="login_contenido">
        <div class="col-md-4">
            <img src="img/otros/mascota.png" height="350" width="300">
        </div>
        <div class="col-md-6">
            <div class="col-md-offset-2 col-md-9">
                <h1 class="text-info text-center" id="titulo_login">Sign In</h1>
                <form id="frmLogin" method="post" action="login.php" >
                <fieldset>
                    <legend class="text-center"></legend>
                    <div class="row form-group">
                        <label class="control-label" id="label_usuario">Usuario</label>
                        <input name="username"  type="text" class="form-control" placeholder="Usuario" >
                       
                    </div>
                    <div class="row form-group">
                        <label class="control-label" id="label_password">Contrase&ntilde;a</label>
                        <input name="password" type="password" class="form-control" placeholder="Contrase&ntilde;a" >
                      
                    </div>
                    <div class="row"><br>
                        <button type="submit" class="btn btn-lg btn-block btn-primary">SIGN IN</button>
                    </div><br>
                </fieldset>
                </form>
                <div class="text-center" id="texto">
                    No tienes cuenta? <b><a href="register_view.php">Registrate</a></b> 
                </div>
            </div>
        </div>
</div>
    

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
        $('#frmLogin').validate({
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
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


<?php
include("config.php");
include($basepath."users/User.php");

$user = $_POST["username"];
$pass = $_POST["password"];

$user_object = new User();
$user_data = $user_object->verifiedUserCredentials($user,$pass);
if($user_data){
    //Abrimos la sesión
    session_start();

    /*
     * Creamos nuevas variables de sesión para el id del usuario
     * la fecha de inicio y la fecha de expiración
     */

    $_SESSION["user_data"] = $user_data;
    $_SESSION["login"] = true;
    $_SESSION["start"] = time();
    $_SESSION["expirate"] = $_SESSION["start"]+(60*10);
    
     
}else{  
    $status = false;
    $messagge = "El usuario o password son incorrectos";
}

?>



