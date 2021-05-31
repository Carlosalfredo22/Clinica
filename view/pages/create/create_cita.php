
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Registrar Citas</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12 Formulario" action="?c=<?php echo base64_encode('Cita'); ?>&a=<?php echo base64_encode('RegistrarCita'); ?>" method="post" data-form="save">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">event</i>
              <input id="fecha" type="date" class="validate" name="fecha" required autofocus>
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">alarm</i>
              <input id="hora" type="time" class="validate" name="hora" required>
              <label for="hora">Hora</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idrol">Nombre de usuario</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idusuario" name="idusuario" class="validate" required>              
                <?php foreach($this->modelUsuario->ListarUsuarios() as $r): ?>
                    <option value="<?php echo $r->idusuario; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">airline_seat_flat</i>
              <label for="idrol">Nombre de paciente</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idexpediente" name="idexpediente" class="validate" required>              
                <?php foreach($this->modelExpediente->ListarExpedientes() as $r): ?>
                    <option value="<?php echo $r->idexpediente; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="guardar" title="Guardar registro">Guardar
                <i class="material-icons right">send</i>
              </button>
            </div>

          </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->