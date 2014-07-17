<?php
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php');
  include ('../../controllers/ArticuloController.php');
  include ('../../libs/Er.php');
  include ('../layouts/header.php');


  if (isset($_POST['nombre'])) {
    /*echo "<pre>"; //muestra los espacios que envia.
    print_r($_POST);
    echo "</pre>";*/
    $articuloC = new ArticuloController();
    $articuloC->insertaArticulo($_POST);
  }
?>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-6">
			<h3>Artículo</h3>
			<br/>
			<form id="Form_articulo" method="post" class="form-horizontal">
			    <div class="tab-content">
			        <div class="tab-pane active" id="info-tab">
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="nombre">Nombre</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="nombre" id="nombre" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="resumen">Resumen</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="resumen" id="resumen" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="abstract">Abstract</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="abstract" id="abstract" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="introduccion">Introduccion</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="introduccion" id="introduccion" />
			                </div>
			            </div>
			            
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="metodologia">Metodología</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="metodologia" id="metodologia" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="contenido">Contenido</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="contenido" id="contenido" />
			                </div>
			            </div>


				        <!--<div class="form-group">
				        	<label class="col-lg-3 control-label" for="fecha_creacion">Fecha de Creación:</label>
				        	<div class="col-lg-5">
                			<div class='input-group date' id='fecha_creacion' name="fecha_creacion" data-date-format="YYYY/MM/DD">
                			    <input type='text' class="form-control" />
                			    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>
                			    </span>
                			</div>
            			</div>
						</div>-->

			            <div class="form-group">
				            <label class="col-lg-3 control-label" for="archivo_pdf">Archivo PDF</label>
				            <div class="col-lg-5">
				            	<input type="file" id="archivo_pdf" name="archivo_pdf">
				            </div>
				         </div>

			            <div class="form-group">
				            <label class="col-lg-3 control-label" for="id_status">Status:</label>
				            <div class="col-lg-5">
				            	<select id="id_status" name="id_status" class="form-control" required>
				              		<option value="" disabled selected>Seleccionar</option>
				              		<option value="1">1</option>
				              		<option Value="2">2</option>
				              		<option>3</option>
				              		<option>4</option>
				              		<option>5</option>
				            	</select>
				            </div>
				         </div>
				         <div class="form-group">
			                <label class="col-lg-3 control-label" for="conclusiones">Conclusiones</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="conclusiones" id="conclusiones" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="agradecimientos">Agradecimientos</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="agradecimientos" id="agradecimientos" />
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-lg-3 control-label" for="referencias">Referencias</label>
			                <div class="col-lg-5">
			                    <input type="text" class="form-control" name="referencias" id="referencias" />
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