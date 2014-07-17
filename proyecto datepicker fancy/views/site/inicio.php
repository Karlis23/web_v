<?php include ('../layouts/header.php'); ?>
      <div class="jumbotron">
        <h1>Práctica 8</h1>
       <!--<a class="btn btn-lg btn-success" href="#" role="button">Formulario</a></p>-->
       <a class="formulario" href="revista.php">Formulario</a>
      </div>

              <style type="text/css">
        /* Override feedback icon position */
        .form-horizontal .has-feedback .input-group .form-control-feedback {
            top: 0;
            right: -30px;
        }
        </style>

        <form id="fechaform" class="form-horizontal">
            <div class="form-group">
                <label class="col-lg-3 control-label">Fecha de nacimiento:</label>
                <div class="col-lg-4">
                    <div class="input-group date" id="fecha">
                        <input type="text" class="form-control" name="meeting" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <span class="help-block">MM/DD/YYYY h:m A</span>
                </div>
            </div>
        </form>
<?php include ('../layouts/footer.php'); ?>