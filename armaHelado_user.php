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
        <h1 class="text-info text-center" id="titulo">Arma tu helado</h1>
        <legend class="text-center"></legend>
        <div class="col-md-7">
            <div class="text-center" id="texto">Una gran variedad de sabores y toppings para tí.</div>   
            <form id="pedido" method="post" action="" >
            <fieldset>
                <div class="row form-group">
                    <label class="control-label">Tamaño</label>
                    <select class="form-control" name="precio">
                        <option value="">Escoje el tamaño de tu tarrina</option>
                        <option value="P">$1 - Pequeño               </option>
                        <option value="M">$2.5 - Mediado</option>
                        <option value="G">$5 - Grande</option>
                    </select>

                </div>
                <div class="row form-group">
                    <label class="control-label">Sabor</label>
                    <select class="form-control" name="sabor">
                        <option value="">Escoje tu sabor favorito de helado</option>
                        <option value="CL">Chicle               </option>
                        <option value="CH">Chocolate</option>
                        <option value="GO">Galleta oreo</option>
                        <option value="MD">Mandarina</option>
                        <option value="MG">Mango</option>
                        <option value="MF">Mora frutilla</option>
                        <option value="N">Natural</option>
                    </select>
                </div>
                <div class="row form-group">
                    <label class="control-label">Topping - Opción 1</label>
                    <select class="form-control" name="sabor">
                        <option value="">Escoje tus toppings favoritos</option>
                        <option value="P">Plátano               </option>
                        <option value="BC">Bolitas de colores</option>
                        <option value="C">Cereal</option>
                        <option value="CE">Cerezas</option>
                        <option value="CB">Chocolate blanco</option>
                        <option value="CS">Chocolates</option>
                        <option value="CO">Coco</option>
                        <option value="F">Frutilla</option>
                        <option value="GS">Galletas</option>
                        <option value="GM">Gomitas</option>
                        <option value="LC">Leche condensada</option>
                        <option value="O">Oreo</option>
                    </select>
                </div>
                <div class="row form-group">
                    <label class="control-label">Topping - Opción 2</label>
                    <select class="form-control" name="sabor">
                        <option value="">Escoje tus toppings favoritos</option>
                        <option value="P">Plátano               </option>
                        <option value="BC">Bolitas de colores</option>
                        <option value="C">Cereal</option>
                        <option value="CE">Cerezas</option>
                        <option value="CB">Chocolate blanco</option>
                        <option value="CS">Chocolates</option>
                        <option value="CO">Coco</option>
                        <option value="F">Frutilla</option>
                        <option value="GS">Galletas</option>
                        <option value="GM">Gomitas</option>
                        <option value="LC">Leche condensada</option>
                        <option value="O">Oreo</option>
                    </select>
                </div>
                
                <div class="row"><br>
                    <button type="submit" class="btn btn-lg btn-block btn-primary " id="button_registro">Hacer pedido</button>
                </div><br>
            </fieldset>
            </form>
        </div>
        <div class="col-md-4">
            <br>
            <br>
            <img src="img/otros/pasos2.png" height="500" width="500" >
            
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
