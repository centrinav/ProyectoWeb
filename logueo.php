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

    $_SESSION["user_data"] = $user_data;
    $_SESSION["login"] = true;
    $_SESSION["start"] = time();
    $_SESSION["expirate"] = $_SESSION["start"]+(60*10);
    header("Location: home.php");
     
}else{  
    $status = false;
    $messagge = "El usuario o password son incorrectos";
    header("Location: login.php?status=$status&messagge=$messagge");
}

?>
