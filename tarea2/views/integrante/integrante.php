<?php include ('../layouts/header.php'); ?>
    <div class="jumbotron">
      <div class="container">
        <h1>Examen 2. 5 de Julio 2014</h1>
        <p><a class="btn btn-primary btn-lg" role="button" id="boton1">Ver Formularios &raquo;</a></p>
      </div>
    </div>

          <div class="row">

        <div class="col-md-4" id="formulario2">
          <h2 id="integrante">Integrante</h2>
          <form role="form">
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre del integrante" required>
            </div>

            <div class="form-group">
              <label for="apellido">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa el apellido del integrante" required>
            </div>

            <div class="form-group">
              <label for="peso">Peso:</label>
              <input type="text" class="form-control" id="peso" name="peso" placeholder="Ingresa el peso del integrante" required>
            </div>

            <div class="form-group">
              <label for="estatura">Estatura:</label>
              <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Ingresa la estatura del integrante" required>
            </div>

            <div class="form-group">
              <label for="edad">Edad:</label>
              <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingresa la edad del integrante" required>
            </div>

            <div class="form-group">
              <label for="foto">Foto:</label>
              <input type="file" id="foto" name="foto" required>
            </div>

            <div class="form-group">
              <label for="id_equipo">Equipo:</label>
              <select id="id_equipo" name="id_equipo" class="form-control" required>
                <option value="" disabled selected>Seleccionar</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>

            <p><a class="btn btn-default" href="#" role="button" id="boton2">Entrenador &raquo;</a></p>
            <p><a class="btn btn-default" href="#" role="button" id="boton3">Jugador &raquo;</a></p>  
          </form>
        
          
       </div>
        <div class="col-md-4" id="formulario3">
          <h2>Tipo de integrante</h2>
          <form role="form">
            <div class="form-group" id="form_jugador">
              <h3>Jugador</h3>
              <div class="form-group">
                <label for="numero">numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingresa el numero del jugador" required>
              </div>  

              <div class="form-group">
                <label for="id_posicion">Posici&oacute;n:</label>
                <select id="id_posicion" name="id_posicion" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>

          </form>
          <form role="form">
            <div class="form-group" id="form_entrenador">
              <h3>Entrenador</h3>
              
              <div class="form-group">
                <label for="id_pais">Pais:</label>
                <select id="id_pais" name="id_pais" class="form-control" required>
                  <option value="" disabled selected>Seleccionar</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            </div>
          </form>  
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>



<?php include ('../layouts/footer.php'); ?>