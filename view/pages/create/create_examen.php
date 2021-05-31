
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Registrar Examen</h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form enctype="multipart/form-data" class="col s12 Formulario" action="?c=<?php echo base64_encode('Examen'); ?>&a=<?php echo base64_encode('RegistrarExamen'); ?>" method="post" data-form="save">
        <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">alarm</i>
              <input id="fecha" type="date" class="validate" name="fecha" required>
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">assignment_ind</i>
              <input id="titulo" type="text" class="validate" name="titulo" required autofocus>
              <label for="titulo"> Título</label>
            </div>

          <div class="file-field input-field col s6">
            <div class="btn">
              <span>Cargar Examenes</span>
              <input type="file" name="examen[]" id="examen[]" multiple="">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="examen[]" multiple="">
            </div>
          </div>

            <div class="input-field col s12">
              <i class="material-icons prefix form-icon">contacts</i>
              <label for="idconsulta">Hora consulta</label>
              <br>
            </div>
            <div class="input-field col s12">              
            <i class="material-icons prefix form-icon">arrow_drop_down</i>
            <select id="idconsulta" name="idconsulta" class="validate" required>              
                <?php foreach($this->modelConsulta->ListarConsulta() as $r): ?>
                    <option value="<?php echo $r->idconsulta; ?>"><?php echo $r->hora; ?></option>
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