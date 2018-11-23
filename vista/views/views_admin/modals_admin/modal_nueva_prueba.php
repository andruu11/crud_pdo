<form name="crud"  method="post" enctype="multipart/form-data" action="../../../model/model_admin/nueva_prueba.php" id="nuevo_so">
<div class="modal fade" id="Modal_Nueva_Prueba" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nueva Prueba</h4>
      </div>
      <div class="modal-body">
            
  <div class="form-group col-md-12">
            <label for="codigo" class="control-label" >Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" onpaste="return false" minlength="5" maxlength="100" required> 
  </div>
<div class="form-group col-md-12">
            <label for="codigo" class="control-label" >Recurso adjunto:</label>
            <input type="file" class="form-control" id="archivo" name="archivo" required> 
</div>
<div class="form-group col-md-8">
    <label for="select" class="control-label">Ciudad:</label>
        <select class="form-control" id="id_ciudad" name="id_ciudad" required/>
        <option value="">-----Seleccione una Ciudad------</option>
        <?php
  
        foreach ($resultado_ciudad as $key_ciudad => $value_ciudad) { ?>
          <option value="<?php echo $value_ciudad['id_ciudad'];?>"><?php echo "<b>".utf8_encode($value_ciudad['des_ciudad'])."</b>";}?></option>
        </select>
</div> 




            <input type="submit" value="Registrar" class="btn btn-block btn-success" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
</form>