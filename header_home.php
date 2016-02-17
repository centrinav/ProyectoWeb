<?php 
include(__DIR__."/config.php");
include($basepath."verified_session.php"); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Proyecto Final - Aplicaciones Web</title>
       
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <script src="libs/media/js/jquery/jquery-1.11.1.js"></script>
        <script src="libs/bootstrap/js/bootstrap.min.js"></script>
        <script src="libs/media/js/jquery/jquery.validate.js"></script>
        <script src="libs/media/js/jquery/jquery.validate.min.js"></script>  
        <script src="libs/media/js/globalfunctions.js"></script> 
              
 
    </head>
    <body>
        <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php"><img src="img/logo/gelatosferaSinFondo.png" height="90px" width="150px"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <br>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong style="font-size:{20px;}">Perfil</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Nombre Apellido</strong></p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm" id="button_actualizar">Administrar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <?php 
                    $profile = new Profile();
                    $menu = $profile->getMenu(NULL, $_SESSION["user_data"]["profile_id"]);
                    echo $menu;
                    ?>
                                            <a href="<?php echo $baseurl; ?>logout.php" class="btn btn-danger btn-block" id="button_cerrarSesion">Cerrar Sesion</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="opcionesMenu">
                    <li>
                        <a href="sabores.php">Sabores</a>
                    </li>
                    <li>
                        <a href="toppings.php">Toppings</a>
                    </li>
                    <li>
                        <a href="">Promociones</a>
                    </li>
                    <li>
                        <a href="armaHelado.php">Arma tu helado</a>
                    </li>
                </ul>
            </div>
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <div id="welcome_user">Bienvenido, <?php echo utf8_encode($_SESSION["user_data"]["name"]); ?></div>

        <div class="banner_container text-center">

        </div>

        <div>
            <!--    <!-- Left nav -->
            <ul id="main-menu" class="sm sm-simple" style="padding-left: 0px;" >
                <?php 
                $profile = new Profile();
                $menu = $profile->getMenu(NULL, $_SESSION["user_data"]["profile_id"]);
                echo $menu;
                ?>
                <li class="navbar-right"><a href="<?php echo $baseurl; ?>logout.php"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li>

            </ul>
        </div>

    
