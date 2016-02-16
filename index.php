<?php include("login_redirect.php"); ?>
<?php include("header_login.php"); ?>
<br>
<br>
<br>
<br>
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->
    
    <!--Subfooter -->
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <label id="follow">Síguenos en nuestras redes sociales: </label>
                    <a href="http://www.facebook.com/gelatosfera/"><img src="img/logo/fb.png" height="50" width="50"></a>
                    <a href="https://www.instagram.com/gelatosfera/"><img src="img/logo/instag.png" height="50" width="50"></a>
                </div>
<!--
                <div class="col-lg-3">
                    <img src="img/otros/mascota.png" height="100" width="60">
                </div>
-->
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

<<<<<<< HEAD
<<<<<<< HEAD
</body>

</html>

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
    header("Location: main.php");
     
}else{  
    $status = false;
    $messagge = "El usuario o password son incorrectos";
    header("Location: index.php?status=$status&messagge=$messagge");
}

?>
=======
>>>>>>> origin/VEAU
=======
>>>>>>> master
