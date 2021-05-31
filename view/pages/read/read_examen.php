
<!-- inicio del cuerpo -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">style</i> Examenes Registrados</h2>
    <hr class="separador">
      <div class="row right-align">
        <a href="?c=<?php echo base64_encode('Examen'); ?>&a=<?php echo base64_encode('Crearexamen'); ?>" class="waves-effect waves-light btn gris-ast"><i class="material-icons left">add_circle</i>Nuevo</a>      
        <!-- <a href="#!" class="waves-effect waves-light btn azul-ast"><i class="material-icons left">description</i>PDF</a> -->
        <!-- <a target="_blank" href="http://localhost/proyectoClinica/DatosExamenes/" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">Mostrar Archivos</a> -->
      </div>
    </div>
  </div>
  
<div class="container">
    <div class="section">

      <!--   Data Section   -->
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s3"><a class="active tab-activos" href="#activos">Activos</a></li>
                  <li class="tab col s3"><a class="tab-inactivos" href="#inactivos">Inactivos</a></li>
                </ul>
              </div>
              <!-- tabla de activos -->
              <div id="activos" class="col s12">
                <table id="tabla-activos" class="striped responsive-table highlight">
                  <thead>
                      <tr>
                          <th>Idexamen</th>
                          <th>Fecha</th>
                          <th>Título</th>
                          <th>Vizualizar Examen</th>
                          <th>Hora consulta</th>
                          <th>Estado</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <!-- inicio del cuerpo de la tabla activos -->
                  <?php foreach($this->model->ListarExamenActivos() as $r): ?>
                      <tr>
                          <td><?php echo $r->idexamen; ?></td>
                          <td><?php echo $r->fecha; ?></td>
                          <td><?php echo $r->titulo; ?></td>
                          <td><a href="http://localhost/ProyectoClinica/<?php echo $r->examenruta; ?>" target="_blank" class="waves-effect waves-light btn-small">Ver PDF</a></td>
                          <td><?php echo $r->hora; ?></td>
                          <td><?php echo $r->estado; ?></td>
                          <td class="center">
                              <a href="?c=<?php echo base64_encode('Examen'); ?>&a=<?php echo base64_encode('Editarexamen'); ?>&idexamen=<?php echo base64_encode($r->idexamen); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">edit</i></a>
                          </td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Examen'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('0'); ?>&idexamen=<?php echo base64_encode($r->idexamen); ?>" title="Desactivar Registro" ><i class="material-icons red-text hoverable circle mini">cancel</i></a>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                  <!-- fin del cuerpo de la tabla activos -->
                  </tbody>
                </table>
              </div>
              
              <!-- tabla de inactivos -->
              <div id="inactivos" class="col s12">
                <table id="tabla-inactivos" class="striped responsive-table highlight">
                  <thead>
                      <tr>
                      <th>Idexamen</th>
                          <th>Fecha</th>
                          <th>Título</th>
                          <th>Examen Ruta</th>
                          <th>Hora consulta</th>
                          <th>Estado</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <!-- inicio del cuerpo de la tabla inactivos -->
                  <?php foreach($this->model->ListarExamenInactivos() as $r): ?>
                      <tr>
                      <td><?php echo $r->idexamen; ?></td>
                          <td><?php echo $r->fecha; ?></td>
                          <td><?php echo $r->titulo; ?></td>
                          <td><?php echo $r->examenruta; ?></td>
                          <td><?php echo $r->hora; ?></td>
                          <td><?php echo $r->estado; ?></td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea activar este registro?');" href="?c=<?php echo base64_encode('Examen'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('1'); ?>&idexamen=<?php echo base64_encode($r->idexamen); ?>" title="Activar Registro"><i class="mini material-icons green-text hoverable circle">check_circle</i></a>
                          </td>
                      </tr>
                    <?php endforeach; ?>
                  <!-- fin del cuerpo de la tabla inactivos -->
                  </tbody>
                </table>
              </div>
            </div>

    </div>
    
  </div>
<!-- fin del cuerpo -->