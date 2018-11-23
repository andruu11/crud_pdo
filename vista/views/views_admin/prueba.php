<?php
require_once("../../default/default_admin/main_admin.php");
require_once("../../default/default_admin/header_admin.php");
require_once("../../../model/model_admin/consultas.php"); 
?>
<script src="../../assets/js/panel_prueba.js" type="text/javascript"></script>
<script src="../../assets/js/check_image.js" type="text/javascript"></script>


<?php
require_once("../../default/default_admin/menu_admin.php");
?>
<br><br><br><br><br><br>
<div class="row">
  
<div class="col-md-8 col-md-offset-2">
    <h1>
            <button type="button" class="btn btn-success pull-right menu" data-toggle="modal" data-target="#Modal_Nueva_Prueba"><i class="glyphicon glyphicon-plus" aria-hidden="true"></i>&nbsp;Agregar Nueva Prueba</button>     
                       <?php require_once('modals_admin/modal_nueva_prueba.php');
                             require_once('modals_admin/madal_editar_prueba.php');
                       ?>      </div>
    </h1>  
</div><br><br>
<div class="col-md-8 col-md-offset-2">    
    <table id="panel_prueba" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Ciudad</th>
            <th>Archivo</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
           <th>Nombre</th>
            <th>Ciudad</th>
            <th>Archivo</th>
            <th>Acciones</th>
        </tr>
        </tfoot>
    </table>        
</div>

</div>


<script src="../../assets/js/var_prueba.js" type="text/javascript"></script>
<?php
require_once("../../default/default_admin/footer_admin.php");

?>