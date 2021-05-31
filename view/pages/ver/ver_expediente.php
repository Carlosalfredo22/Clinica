
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Expediente del paciente: <?php echo $expediente->nombre; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <input type="hidden"  value="<?php echo $expediente->idexpediente; ?>" name="idexpediente">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <label for="nombre">Nombre completo: <?php echo $expediente->nombre; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <label for="edad">Edad: <?php echo $expediente->edad; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <label for="fecha">Fecha: <?php echo $expediente->fecha; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="peso">Peso: <?php echo $expediente->peso; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <label for="fechanacimiento">Fecha de nacimiento: <?php echo $expediente->fechanacimiento; ?></label>
            </div>
            

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="estadocivil">Estado civil: <?php echo $expediente->estadocivil; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="ocupacion">Ocupacion: <?php echo $expediente->ocupacion; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="direccion">Direccion: <?php echo $expediente->direccion; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="alergias">Alergias: <?php echo $expediente->alergias; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="telefono">Telefono: <?php echo $expediente->telefono; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="motivo">Motivo: <?php echo $expediente->motivo; ?></label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <label for="numeroexpediente">Numero de expediente: <?php echo $expediente->numeroexpediente; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">mail</i>
              <label for="otrosdatos">Otros datos: <?php echo $expediente->otrosdatos; ?></label>
            </div>

          </div>
          <div class="input-field col s12">
              <!-- <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Imprimir Expediente
                <i class="material-icons right">print</i>
              </button> -->
              <a target="_blank" href="http://localhost/ProyectoClinica/PDF/VerExpediente.php?idexpediente=<?php echo $expediente->idexpediente; ?>" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">Imprimir Expendiente<i class="material-icons right">print</i></a>
            </div>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->