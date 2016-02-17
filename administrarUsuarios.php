<!--
?php
include(__DIR__."/config.php");
include($basepath."verified_session.php"); 
?>
-->
<?php include("login_redirect.php"); ?>
<?php include("header_login.php"); ?>

<br>
<br>
<br>
<br>


 
<div class="container" id="contenido">
    <h1 class="text-info text-center" id="titulo">Administración de usuarios</h1>
    <legend class="text-center"></legend>
    <div class="col-md-12">
        <table class="table" border="2">
                <tr><th>&nbsp;Nombre:&nbsp;</th><th>&nbsp;Nacionalidad:&nbsp;</th><th>&nbsp;Pais:&nbsp;</th></tr>
            <?php
                $sql_peticion="SELECT * FROM cliente";
                $resultados=mysqli_query($conexion,$sql_peticion);
                //validar si la consulta nos da un resultado no vacio
                if(mysqli_num_rows($resultados)>0){
                    echo "<h1>Lista de registros:</h1>";
                        while($row=mysqli_fetch_assoc($resultados)){
                            ?>
                                <tr><td>&nbsp;<?php echo $row["nombre"] ?>&nbsp;</td>
                                    <td>&nbsp;<?php echo $row["nacionalidad"] ?>&nbsp;</td>
                                    <td>&nbsp;<?php echo $row["pais"] ?>&nbsp;</td>
                                    <td>&nbsp;<a href="ver.php?cliente_id= <?php echo $row["id"]?>" >Ver</a>&nbsp;</td>
                                    <td>&nbsp;<a href="editar.php?cliente_id= <?php echo $row["id"]?>" >Editar</a>&nbsp;</td>
                                    <td>&nbsp;<a href="borrar.php?cliente_id= <?php echo $row["id"]?>" >Borrar</a>&nbsp;</td>
                                    <td><div cliente_id="<?php echo $row['id'];?>" id="boton_saludo_<?php echo $row['id'];?>" style="background: lightblue;">Saludo</div></td>
                </tr>
                                <?php
                                }

                }
                else{
                    echo "no existieron resultados";

                }

            ?>
        </table>   
    </div>
        
</div>

    
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
    

</body>

</html>
