<?php 
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php');
  include ('../../controllers/RevistaController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php'); 
  
  if (isset($_POST['nombre'])) {
    $revistaC = new RevistaController();
    $revistaC->insertaRevista($_POST);
  }
?>
    <div class="row">
      <div class="col-md-10">
        <h4>Revista:</h4>

        <form id="formregistro" method="POST" class="form-horizontal">
          
          <div class="form-group">
            <label class="col-lg-3 control-label" for="nombre">Nombre:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="nombre" id="nombre"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="portada">Portada:</label>
            <div class="col-lg-6">
                <input type="file" class="form-control" name="portada" id="portada"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="fecha">Fecha:</label>
            <div class="row">
              <div class="col-lg-3">
                <div class='input-group date' id='fecharev'>
                <input type="text" class="form-control" name="fecha" id="fecha"/>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
                </span>
                </div>
                <span class="help-block">Formato sugerido para este campo:MM/DD/YYYY h:m </span>
              </div>
            </div>
         </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="volumen">Volumen:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="volumen" id="volumen"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="titulo">T&iacute;tulo:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="titulo" id="titulo"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="subtitulo">Subt&iacute;tulo:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="subtitulo" id="subtitulo"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="numero">N&uacute;mero:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="numero" id="numero"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="clave">Clave:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="clave" id="clave"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="directorio">Directorio:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="directorio" id="directorio"/>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label" for="editorial">Editorial:</label>
            <div class="col-lg-3">
                <input type="text" class="form-control" name="editorial" id="editorial"/>
            </div>
          </div>
            <input type="submit" name="Guardar" value="Guardar" />
          </div>
          
        </form>  

      </div>
    </div>
  
</div>


<?php include ('../layouts/footer.php'); ?>