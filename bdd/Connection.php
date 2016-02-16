<?php
 
 class Connection {
     public static function getConnection(){
             $server = "localhost";
             $user = "root";
             $pass = "";
             $dbname = "gelatosfera";
             
             $connection = new mysqli($server,$user,$pass,$dbname);
             if($connection->connect_error){
                 echo $connection->connect_error;
                 die;
             }else{
                 return $connection;
             }          
     }
 } 