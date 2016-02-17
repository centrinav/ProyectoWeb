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
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/jquery-1.11.1.js"></script>
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
        <script src="<?php echo $baseurl; ?>libs/media/js/bootstrap-filestyle.min.js"></script>
        <script src="<?php echo $baseurl; ?>libs/media/js/jquery/jquery.timepicker.js"></script>  
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
                                        <p class="text-left"><strong><?php echo utf8_encode($_SESSION["user_data"]["name"]); ?></strong></p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-primary btn-block btn-sm" id="button_actualizar">Administrar</a>
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
                        <a href="users/armaHelado_User.php">Arma tu helado</a>
                    </li>
                    
<!--
                    <li>
                        <a href="">Haz tu pedido</a>
                    </li>
-->
                </ul>
            </div>
            
            
        
            
            
            
            
        <div id="welcome_user">Bienvenido, <?php echo utf8_encode($_SESSION["user_data"]["name"]); ?></div>
        

        <div class="banner_container text-center">

        </div>

        <div>
            <!--    <!-- Left nav -->
        </div>

     
        </div>
        
        </nav>
        
        