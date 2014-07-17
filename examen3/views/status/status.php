<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php');
  include ('../../controllers/StatusController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


  if (isset($_POST['status'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $integranteC = new StatusController();
    $integranteC->insertaStatus($_POST);
  }
?>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3>Status</h3>
			<br/>
			<form id="Form_status" method="post" class="form-horizontal">
			    <div class="tab-content">
			        <div class="tab-pane active" id="info-tab">
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="status">status</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="status" id="status" />
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