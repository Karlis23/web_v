<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php');
  include ('../../controllers/AutorController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $autorC = new AutorController();
    $autorC->insertaAutor($_POST);
  }
?>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3>Autor</h3>
			<br/>
			<form id="Form_autor" method="post" class="form-horizontal">
			    <div class="tab-content">
			        <div class="tab-pane active" id="info-tab">
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="nombre">Nombre</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="nombre" id="nombre" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="apellidos">Apellidos</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="apellidos" id="apellidos" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="email">E-mail</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="email" id="email" />
			                </div>
			            </div>
			        </div>
			    </div>

			    <div class="form-group">
			        <div class="col-lg-5 col-lg-offset-3">
			            <button type="submit" class="btn btn-primary">Guardar</button>
			        </div>
			    </div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
<?php include ('../layouts/footer.php') ?>