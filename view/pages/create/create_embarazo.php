
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Registrar Embarazo</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Embarazo'); ?>&a=<?php echo base64_encode('RegistrarEmbarazo'); ?>" method="post">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">person</i>
              <input id="nombre" type="text" class="validate" name="nombre" required autofocus>
              <label for="nombre">Nombre Completo</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">event</i>
              <input id="fechanacimiento" type="date" class="validate" name="fechanacimiento" required>
              <label for="fechanacimiento">Fecha Nacimiento</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">directions_run</i>
              <input id="direccion" type="text" class="validate" name="direccion" required>
              <label for="direccion">Dirección</label>
            </div>

            <div class="input-field col s12 m2">
              <i class="material-icons prefix form-icon">local_library</i>
              <label for="alfabeta">Alfabeta</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="alfabeta" type="radio" value="Si" checked />
                    <span>Si</span>
                </label>

                <label>
                    <input class="with-gap" name="alfabeta" type="radio" value="No" />
                    <span>No</span>
                </label>
                </p>
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
            
            <!-- <div class="input-field col s6">
              <i class="material-icons prefix form-icon">mail</i>
              <input id="estudios" type="text" class="validate" name="estudios" required>
              <label for="estudios">Estudios</label>
            </div> -->

            <div class="input-field col s12 m2">
              <i class="material-icons prefix form-icon">school</i>
              <label for="estudios">Estudios</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="estudios" type="radio" value="Primaria" checked />
                    <span>Primaria</span>
                </label>

                <label>
                    <input class="with-gap" name="estudios" type="radio" value="Secundaria" />
                    <span>Secundaria</span>
                </label>

                <label>
                    <input class="with-gap" name="estudios" type="radio" value="Bachillerato" checked />
                    <span>Bachillerato</span>
                </label>

                <label>
                    <input class="with-gap" name="estudios" type="radio" value="Universidad" checked />
                    <span>Universidad</span>
                </label>
                </p>
            </div>
            
            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">phone</i>
              <input id="telefono" type="text" class="validate" name="telefono" required>
              <label for="telefono">Teléfono</label>
            </div>

            
            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">perm_identity</i>
              <input id="edad" type="text" class="validate" name="edad" required>
              <label for="edad">Edad</label>
            </div>

            
            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">today</i>
              <input id="gestacionactual" type="text" class="validate" name="gestacionactual" required>
              <label for="gestacionactual">Gestación Actual</label>
            </div>

            <div class="input-field col s12 m2">
              <i class="material-icons prefix form-icon">list_alt</i>
              <label for="embarazoplanificado">Embarazo Planificado</label>
            </div>

            <div class="input-field col s12 m4">            
                <p>
                <label>
                    <input class="with-gap" name="embarazoplanificado" type="radio" value="Si" checked />
                    <span>Si</span>
                </label>

                <label>
                    <input class="with-gap" name="embarazoplanificado" type="radio" value="No" />
                    <span>No</span>
                </label>
                </p>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">accessibility</i>
              <input id="talla" type="text" class="validate" name="talla" required>
              <label for="talla">Talla</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">insert_chart_outlined</i>
              <input id="pesoinicial" type="text" class="validate" name="pesoinicial" required>
              <label for="pesoinicial">Peso Inicial</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">event_note</i>
              <input id="ultimoembarazo" type="date" class="validate" name="ultimoembarazo" required>
              <label for="ultimoembarazo">Último embarazo</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">enhanced_encryption</i>
              <input id="gestacionesprevias" type="text" class="validate" name="gestacionesprevias" required>
              <label for="gestacionesprevias">Gestaciones Previas</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">child_friendly</i>
              <input id="abortos" type="text" class="validate" name="abortos" required>
              <label for="abortos">Abortos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">pregnant_woman</i>
              <input id="partosvaginales" type="text" class="validate" name="partosvaginales" required>
              <label for="partosvaginales">Partos Vaginales</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">face</i>
              <input id="nacidosvivos" type="text" class="validate" name="nacidosvivos" required>
              <label for="nacidosvivos">Nacidos Vivos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">child_care</i>
              <input id="viven" type="text" class="validate" name="viven" required>
              <label for="viven">Viven</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">airline_seat_flat_angled</i>
              <input id="partos" type="text" class="validate" name="partos" required>
              <label for="partos">Partos</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">airline_seat_flat</i>
              <input id="cesareas" type="text" class="validate" name="cesareas" required>
              <label for="cesareas">Cesareas</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">child_care</i>
              <input id="nacidosbajopeso" type="text" class="validate" name="nacidosbajopeso" required>
              <label for="nacidosbajopeso">Nacidos Con Bajo Peso</label>
            </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idconsulta">Fecha de consulta</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idconsulta" name="idconsulta" class="validate" required>              
                <?php foreach($this->modelConsulta->ListarConsulta() as $r): ?>
                    <option value="<?php echo $r->idconsulta; ?>"><?php echo $r->fecha; ?></option>
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