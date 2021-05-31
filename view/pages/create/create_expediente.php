
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Registrar Expediente</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('RegistrarExpediente'); ?>" method="post">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombre" type="text" class="validate" name="nombre" required autofocus>
              <label for="nombre">Nombres</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="edad" type="text" class="validate" name="edad" required>
              <label for="edad">Edad</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <input type="text" class="datepicker" id="fecha" class="validate" name="fecha" required>
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">accessibility</i>
              <input id="peso" type="text" class="validate" name="peso" required>
              <label for="peso">Peso</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">event</i>
              <input type="text" class="datepicker" id="fechanacimiento" class="validate" name="fechanacimiento" required>
              <label for="fechanacimiento">Fecha de nacimiento</label>
            </div>

            <div class="input-field col s12 m2">
              <i class="material-icons prefix form-icon">wc</i>
              <label for="estadocivil">Estado Civil</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="estadocivil" type="radio" value="Acompañada" checked />
                    <span>Acompañada</span>
                </label>

                <label>
                    <input class="with-gap" name="estadocivil" type="radio" value="Casada" />
                    <span>Casada</span>
                </label>

                <label>
                    <input class="with-gap" name="estadocivil" type="radio" value="Soltera" checked />
                    <span>Soltera</span>
                </label>
                </p>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">assignment_ind</i>
            <input id="ocupacion" type="text" class="validate" name="ocupacion" required>
            <label for="ocupacion">Ocupación</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">directions_run</i>
            <input id="direccion" type="text" class="validate" name="direccion" required>
            <label for="direccion">Dirección</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">call</i>
            <input id="telefono" type="text" class="validate" name="telefono" required>
            <label for="telefono">Teléfono</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">assignment</i>
            <!-- <input id="motivo" type="text" class="validate" name="motivo" required>
            <label for="motivo">Motivo</label> -->
            <textarea id="motivo" name="motivo" class="materialize-textarea validate"></textarea>
          <label for="motivo">Motivo</label>
            </div>

            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon"> airline_seat_flat_angled</i>
            <!-- <input id="alergias" type="text" class="validate" name="alergias" required>
            <label for="alergias">Alergias</label> -->
            <textarea id="alergias" name="alergias" class="materialize-textarea validate"></textarea>
          <label for="alergias">Alergias</label>
            </div>


            <div class="input-field col s12 m6">
            <i class="material-icons prefix form-icon">phone_in_talk</i>
            <input id="numeroexpediente" type="text" class="validate" name="numeroexpediente" required>
            <label for="numeroexpediente">Número de expediente</label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">import_contacts</i>
              <!-- <input id="otrosdatos" type="text" class="validate" name="otrosdatos" required>
              <label for="otrosdatos">Otros datos</label> -->
              <textarea id="otrosdatos" name="otrosdatos" class="materialize-textarea validate"></textarea>
          <label for="otrosdatos">Otros datos</label>
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