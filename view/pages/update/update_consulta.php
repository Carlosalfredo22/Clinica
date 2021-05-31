
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Editar <?php echo $consulta->nombre; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('ActualizarConsulta'); ?>" method="post">
        <input type="hidden"  value="<?php echo $consulta->idconsulta; ?>" name="idconsulta">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">check</i>
              <input id="antecedente_a" type="text" class="validate" value="<?php echo $consulta->antecedente_a; ?>" name="antecedente_a" required autofocus>
              <label for="antecedente_a">	Antecedente A</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">check</i>
              <input id="antecedente_v" type="text" class="validate" value="<?php echo $consulta->antecedente_v; ?>" name="antecedente_v" required>
              <label for="antecedente_v">antecedente V</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">check</i>
              <input id="antecedente_g" type="text" class="validate" value="<?php echo $consulta->antecedente_g; ?>" name="antecedente_g" required>
              <label for="antecedente_g">antecedente G</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">check</i>
              <input id="antecedente_p" type="text" class="validate" value="<?php echo $consulta->antecedente_p; ?>" name="antecedente_p" required>
              <label for="antecedente_p">antecedente P</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <input id="motivo" type="text" class="validate" value="<?php echo $consulta->motivo; ?>" name="motivo" required>
              <label for="motivo">Motivo</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">date_range</i>
              <input id="fecha" type="date" class="validate" value="<?php echo $consulta->fecha; ?>" name="fecha" required>
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">alarm</i>
              <input id="hora" type="time" class="validate" value="<?php echo $consulta->hora; ?>" name="hora" required>
              <label for="hora">Hora</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <input id="diagnostico" type="text" class="validate" value="<?php echo $consulta->diagnostico; ?>" name="diagnostico" required>
              <label for="diagnostico">Diagnostico</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <input id="plan" type="text" class="validate" value="<?php echo $consulta->plan; ?>" name="plan" required>
              <label for="plan">Plan</label>
            </div>
            
            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">assignment</i>
              <label for="idexpediente">Expediente</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idexpediente" name="idexpediente" class="validate" required>
            <option value="<?php echo $consulta->idconsulta; ?>"><?php echo $consulta->nombre; ?></option>              
                <?php foreach($this->modelExpediente->ListarExpedientes() as $r): ?>
                    <option value="<?php echo $r->idexpediente; ?>"><?php echo $r->nombre; ?></option>
                <?php endforeach; ?>
              </select>
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