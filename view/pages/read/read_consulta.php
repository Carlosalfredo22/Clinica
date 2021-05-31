
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">account_circle</i> Consultas registradas</h2>
    <hr class="separador">
      <div class="row right-align">
        <a href="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('CrearConsulta'); ?>" class="waves-effect waves-light btn gris-ast"><i class="material-icons left">add_circle</i>Nuevo</a>      
        <!-- <a target="_blank" href="http://localhost/ProyectoClinica/PDF/PDFRegistroconsulta.php" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">PDF Consulta</a> -->
      
      </div>

    </div>
  </div>
  
<div class="row">
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
                          <th>Idconsulta</th>
                          <th>Paciente</th>
                          <th>Motivo</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th class="center">Ver Consulta</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <!-- inicio del cuerpo de la tabla activos -->
<?php foreach($this->model->ListarConsultaActivos() as $r): ?>
                      <tr>
                          <td><?php echo $r->idconsulta; ?></td>
                          <td><?php echo $r->nombre; ?></td>
                          <td><?php echo $r->motivo; ?></td>
                          <td><?php echo $r->fecha; ?></td>
                          <td><?php echo $r->hora; ?></td>
                          <td class="center">
                                <a href="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('VerConsulta'); ?>&idconsulta=<?php echo base64_encode($r->idconsulta); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">search</i></a>
                            </td>
                          <td class="center">
                              <a href="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('EditarConsulta'); ?>&idconsulta=<?php echo base64_encode($r->idconsulta); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">edit</i></a>
                          </td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('0'); ?>&idconsulta=<?php echo base64_encode($r->idconsulta); ?>" title="Desactivar Registro" ><i class="material-icons red-text hoverable circle mini">cancel</i></a>
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
                      <th>Idconsulta</th>
                          <th>Paciente</th>
                          <th>Motivo</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <tbody>
                  <!-- inicio del cuerpo de la tabla inactivos -->
                  <?php foreach($this->model->ListarConsultaInactivos() as $r): ?>
                      <tr>
                      <td><?php echo $r->idconsulta; ?></td>
                      <td><?php echo $r->nombre; ?></td>
                          <td><?php echo $r->motivo; ?></td>
                          <td><?php echo $r->fecha; ?></td>
                          <td><?php echo $r->hora; ?></td>
                          <td class="center">
                              <a onclick="javascript:return confirm('¿Seguro que desea activar este registro?');" href="?c=<?php echo base64_encode('Consulta'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('1'); ?>&idconsulta=<?php echo base64_encode($r->idconsulta); ?>" title="Activar Registro"><i class="mini material-icons green-text hoverable circle">check_circle</i></a>
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