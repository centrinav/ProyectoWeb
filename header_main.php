<?php 
include(__DIR__."/config.php");
include($basepath."verified_session.php"); 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PROJECT TITLE</title>
       
        <link href="<?php echo $baseurl; ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>css/landing-page.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>css/style.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseurl; ?>libs/media/css/loader.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>libs/media/css/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo $baseurl; ?>js/jquery.js"></script>
        <script src="<?php echo $baseurl; ?>libs/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo $baseurl; ?>js/bootstrap.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/bootstrap/js/typeahead.bundle.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/jquery.validate.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/jquery.validate.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/additional-validate.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/globalfunctions.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/superfish/hoverIntent.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/superfish/superfish.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery.autosize.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery.autosize.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery-ui-1.10.4.custom.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery.ui.datepicker-es.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/dataTables/media/js/jquery.dataTables.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/dataTables/media/js/jquery.dataTables.bootstrap.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/select2/select2.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/select2/select2_locale_es.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/bootbox.js"></script>
        <link href="<?php echo $baseurl; ?>libs/media/js/dataTables/media/css/jquery.dataTables.bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>libs/media/js/select2/select2.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>libs/media/js/select2/select2-bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo $baseurl; ?>libs/media/js/bootstrap-filestyle.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/jquery.timepicker.js"></script>
        <link href="<?php echo $baseurl; ?>libs/media/js/jquery/jquery.timepicker.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>libs/media/css/menu/sm-core-css.css" rel="stylesheet" type="text/css" media="all">
        <link href="<?php echo $baseurl; ?>libs/media/css/menu/sm-simple/sm-simple.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo $baseurl; ?>libs/media/js/menu/jquery.smartmenus.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/menu/jquery.smartmenus.min.js"></script>       
 
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
                    <li>
                        <a href="login.php"><button class="btn btn-lg btn-block btn-primary" id="button_login">SIGN IN</button></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right" id="opcionesMenu">
                    <li>
                        <a href="">Sabores</a>
                    </li>
                    <li>
                        <a href="">Toppings</a>
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

    
