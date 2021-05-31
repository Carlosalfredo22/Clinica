
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Detalles embarazo de: <?php echo $embarazo->nombre; ?></h2>
    <hr class="separador">

    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Form Section   -->
      <div class="row card form-background">
        <form class="col s12" action="?c=<?php echo base64_encode('Embarazo'); ?>&a=<?php echo base64_encode('ActualizarEmbarazo'); ?>" method="post">
        <input type="hidden"  value="<?php echo $embarazo->idembarazo; ?>" name="idembarazo">
          <div class="row">

            <div class="input-field col s12">
            <br>
            </div>

          <!-- Inicia formulario -->
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person</i>
              <label for="nombre">Nombre completo: <?php echo $embarazo->nombre; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Fecha Nacimiento: <?php echo $embarazo->fechanacimiento; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Direccion: <?php echo $embarazo->direccion; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Alfabeta: <?php echo $embarazo->alfabeta; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Estado civil: <?php echo $embarazo->estadocivil; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Estudios: <?php echo $embarazo->estudios; ?></label>
            </div>
            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Telefono: <?php echo $embarazo->telefono; ?></label>
            </div>
            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Edad: <?php echo $embarazo->edad; ?></label>
            </div>
            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Gestacion actual: <?php echo $embarazo->gestacionactual; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">phone</i>
              <label for="nombre">Embarazo planificado: <?php echo $embarazo->embarazoplanificado; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">email</i>
              <label for="nombre">Talla: <?php echo $embarazo->talla; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Peso inicial: <?php echo $embarazo->pesoinicial; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Ultimo embarazo: <?php echo $embarazo->ultimoembarazo; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Gestaciones previas: <?php echo $embarazo->gestacionesprevias; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Abortos: <?php echo $embarazo->abortos; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Partos vaginales: <?php echo $embarazo->partosvaginales; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Nacidos vivos: <?php echo $embarazo->nacidosvivos; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Viven: <?php echo $embarazo->viven; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Partos: <?php echo $embarazo->partos; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Cesareas: <?php echo $embarazo->cesareas; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Nacidos con bajo peso: <?php echo $embarazo->nacidosbajopeso; ?></label>
            </div>

            <div class="input-field col s12 m6">
              <i class="material-icons prefix form-icon">person_outline</i>
              <label for="nombre">Fecha de consulta: <?php echo $embarazo->fecha; ?></label>
            </div>
          <!-- Termina Formulario -->
                      
            <!-- <div class="input-field col s12">
              <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Editar
                <i class="material-icons right">send</i>
              </button>
            </div> -->

          </div>
          <div class="input-field col s12">
              <!-- <button class="btn waves-effect waves-light azul-ast hoverable" type="submit" name="editar" title="Editar registro">Imprimir Expediente
                <i class="material-icons right">print</i>
              </button> -->
              <a target="_blank" href="http://localhost/ProyectoClinica/PDF/VerEmbarazo.php?idembarazo=<?php echo $embarazo->idembarazo; ?>" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">Imprimir control de embarazo<i class="material-icons right">print</i></a>
            </div>
        </form>
      </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->