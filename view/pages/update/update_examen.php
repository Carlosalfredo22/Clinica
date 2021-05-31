
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">style</i> Editar <?php echo $examen->titulo; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Examenes'); ?>&a=<?php echo base64_encode('Actualizarexamenes'); ?>" method="post">
        <input type="hidden"  value="<?php echo $examen->idexamen; ?>" name="idexamen">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

            
            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">alarm</i>
              <input id="fecha" type="date" class="validate" name="fecha" value="<?php echo $examen->fecha; ?>">
              <label for="fecha">Fecha</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix form-icon">check</i>
              <input id="titulo" type="text" class="validate" name="titulo" value="<?php echo $examen->titulo; ?>">
              <label for="titulo"> Titulo</label>
            </div>

          <div class="file-field input-field col s6">
            <div class="btn">
              <span>Cargar Examenes</span>
              <input type="file" name="examen">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="examen">
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
            <option value="<?php echo $examen->idconsulta; ?>"><?php echo $examen->hora; ?></option>
                <?php foreach($this->modelConsulta->ListarConsulta() as $r): ?>
                    <option value="<?php echo $r->idconsulta; ?>"><?php echo $r->hora; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            
            <div class="input-field col s4">
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