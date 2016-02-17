<?php include("../header_home.php");?>
<?php include_once("User.php");?>

<?php
/*
 * Control y muestra de mensajes. NO BORRAR
 */
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
<br>
<br>
<br>
<br>


 
<div class="container" id="contenido">
    <h1 class="text-info text-center" id="titulo">Ver pedido&nbsp;<span class="glyphicon glyphicon-user"></span></h1>
    <legend class="text-center"></legend>
    <?php
    $users = User::getAllUsers();
    if(!empty($users)){?>
    <img src="img/otros/helado.png">
    <div class="col-md-8">
        <table class="table" border="0" id="info-usuarios">
            <tr>
                <th>&nbsp;Nombres y Apellidos&nbsp;</th>
                <th>&nbsp;Usuario&nbsp;</th>
                <th>&nbsp;Contraseña&nbsp;</th>
                <th>&nbsp;Perfil de usuario&nbsp;</th>
            </tr>
            <?php foreach($users as $user){ ?>
            <tr>
                <td><?php echo utf8_encode($user->name) ?></td>
                <td><?php echo $user->username ?></td>
                <td><?php echo Profile::getProfileById($user->profile_id)->name; ?></td>
                <td>
                    <?php 
                    //Solo permite borrar y actualizar a administradores, y no permite borrar el superadmin
                    if(!($user->id == 1) && $_SESSION["user_data"]["profile_id"] == 1 || $_SESSION["user_data"]["profile_id"] == 2){ ?>
                    <a href="update_view.php?user_id=<?php echo $user->id; ?>">
                    <button class=" btn btn-primary glyphicon glyphicon-pencil" id="editar">
                    </button></a>
                    <a href="delete_pro.php?user_id=<?php echo $user->id; ?>">
                    <button class=" btn btn-danger glyphicon glyphicon-remove" id="eliminar">
                    </button></a>
                    <?php } ?>
                </td>
            </tr>
            <?php }?>
        </table>
        <?php }else{ ?>
        <div class="col-md-offset-2 col-md-8 text-center alert">
            No se encontraron usuarios
        </div>

        <?php } ?>
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

<script>
    $(function(){
        if($('#table_user tbody tr').length>0){
            $('#table_user').DataTable({
                "bPaginate": true,
                "bLengthChange": false,
                "bInfo": true,
                "sPaginationType": "full_numbers",
                "oLanguage": {
                    "oPaginate": {
                        "sFirst": "Primera",
                        "sLast": "&Uacute;ltima",
                        "sNext": "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "sZeroRecords": "No se encontraron resultados",
                    "sInfo": "_START_ - _END_ de _TOTAL_",
                    "sInfoEmpty": "0 - 0 de 0",
                    "sInfoFiltered": "(de _MAX_ en total)",
                    "sSearch": "Buscar:",
                    "sProcessing": "Filtrando.."
                }
            });
        }
        $('#table_user')
            .removeClass( 'display' )
            .addClass('table table-striped table-bordered');
    });
</script>