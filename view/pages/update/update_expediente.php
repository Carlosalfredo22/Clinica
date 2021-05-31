
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Editar <?php echo $expediente->nombre; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('ActualizarExpediente'); ?>" method="post">
        <input type="hidden"  value="<?php echo $expediente->idexpediente; ?>" name="idexpediente">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombre" type="text" class="validate"  value="<?php echo $expediente->nombre; ?>" name="nombre" required autofocus>
              <label for="nombre">Nombres</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="edad" type="text" class="validate"  value="<?php echo $expediente->edad; ?>" name="edad" required>
              <label for="edad">Edad</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <input type="text" class="datepicker" id="fecha" class="validate"  value="<?php echo $expediente->fecha; ?>" name="fecha" required>
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="peso" type="text" class="validate"  value="<?php echo $expediente->peso; ?>" name="peso" required>
              <label for="peso">Peso</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <input type="text" class="datepicker" id="fechanacimiento" class="validate"  value="<?php echo $expediente->fechanacimiento; ?>" name="fechanacimiento" required>
              <label for="fechanacimiento">Fecha de nacimiento</label>
            </div>
            

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="estadocivil" type="text" class="validate"  value="<?php echo $expediente->estadocivil; ?>" name="estadocivil" required>
            <label for="estadocivil">Estado civil</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="ocupacion" type="text" class="validate"  value="<?php echo $expediente->ocupacion; ?>" name="ocupacion" required>
            <label for="ocupacion">Ocupacion</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="direccion" type="text" class="validate"  value="<?php echo $expediente->direccion; ?>" name="direccion" required>
            <label for="direccion">Direccion</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="alergias" type="text" class="validate"  value="<?php echo $expediente->alergias; ?>" name="alergias" required>
            <label for="alergias">Alergias</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="telefono" type="text" class="validate"  value="<?php echo $expediente->telefono; ?>" name="telefono" required>
            <label for="telefono">Telefono</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="motivo" type="text" class="validate"  value="<?php echo $expediente->motivo; ?>" name="motivo" required>
            <label for="motivo">Motivo</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">home</i>
            <input id="numeroexpediente" type="text" class="validate"  value="<?php echo $expediente->numeroexpediente; ?>" name="numeroexpediente" required>
            <label for="numeroexpediente">Numero de expediente</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="otrosdatos" type="text" class="validate"  value="<?php echo $expediente->otrosdatos; ?>" name="otrosdatos" required>
              <label for="otrosdatos">Otros datos</label>
            </div>
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Editar
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->