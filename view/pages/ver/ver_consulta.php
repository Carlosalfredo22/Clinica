
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Detalles consulta de:  <?php echo $consulta->nombre; ?></h2>
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

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">check</i>
              <label for="nombre">Antecedente A: <?php echo $consulta->antecedente_a; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">check</i>
              <label for="nombre">Antecedente V: <?php echo $consulta->antecedente_v; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">check</i>
              <label for="nombre">Antecedente G: <?php echo $consulta->antecedente_g; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">check</i>
              <label for="nombre">Antecedente P: <?php echo $consulta->antecedente_p; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <label for="nombre">Motivo: <?php echo $consulta->motivo; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">date_range</i>
              <label for="nombre">Fecha: <?php echo $consulta->fecha; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">alarm</i>
              <label for="nombre">Hora: <?php echo $consulta->hora; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <label for="nombre">Diagnostico: <?php echo $consulta->diagnostico; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">content_paste</i>
              <label for="nombre">Plan: <?php echo $consulta->plan; ?></label>
            </div>
            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">account_box</i>
              <label for="nombre">Paciente: <?php echo $consulta->nombre; ?></label>
            </div>
            
          </div>
          <div class="input-field col s12">
              <!-- <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Imprimir Expediente
                <i class="material-icons right">print</i>
              </button> -->
              <a target="_blank" href="http://localhost/ProyectoClinica/PDF/VerConsulta.php?idconsulta=<?php echo $consulta->idconsulta; ?>" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">Imprimir registro de consulta<i class="material-icons right">print</i></a>
            </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->