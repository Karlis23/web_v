<?php include ('../layouts/header.php'); ?>
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-9">
        <h2>ESTADIO</h2> 
        <form method="post" id="form_estadio" role="form">
          <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingresa el nombre del estadio" required>
          </div>

          <div class="form-group">
            <label for="idciudad">Ciudad:</label>
            <select id="idciudad" name="idciudad" class="form-control" required>
              <option value="" disabled selected >Seleccionar</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>  
         


          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>

      <div class="col-md-2"></div>



    </div>
<?php include ('../layouts/footer.php'); ?>