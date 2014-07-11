<?php include ('../layouts/header.php'); ?>

<div class="row">
      <div class="col-md-1">  
      </div>
      <div class="col-md-9">
       <h2>CONTINENTE</h2> 
        <br/>  
        <br/>
        <form method="POST" id="form_continente" role="form">
          <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del continente" required>
          </div>

          <br />
          <br />

          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
      <div class="col-md-2"></div>
      
    </div>


<?php include ('../layouts/footer.php'); ?>