
<!-- inicio del cuerpo -->
<div class="section no-pad-bot" id="index-banner">
    <div class="row">      
    <h2 class="center naranja-ast-text"><i class="medium material-icons">supervisor_account</i> Expedientes Registrados</h2>
    <hr class="separador">
      <div class="row right-align">
        <a href="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('CrearExpediente'); ?>" class="waves-effect waves-light btn gris-ast"><i class="material-icons left">add_circle</i>Nuevo</a>      
        <!-- <a target="_blank" href="http://localhost/ProyectoClinica/PDF/PDFExpentpacient.php" class="waves-effect waves-light btn azul-ast btn-lg active" role="button">PDF Expendiente</a> -->
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
                          <th>Id</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Peso</th>
                          <th>Fecha nacimiento</th>
                          <th>Teléfono</th>
                          <th># Expediente</th>
                          <th class="center">Ver</th>
                          <th class="center">Editar</th>
                          <th class="center">Desactivar</th>
                      </tr>
                  </thead>
                  <tbody>
                    <!-- inicio del cuerpo de la tabla activos -->
                    <?php foreach($this->model->ListarExpedientesActivos() as $r): ?>
                        <tr>
                            <td><?php echo $r->idexpediente; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->edad; ?></td>
                            <td><?php echo $r->peso; ?></td>
                            <td><?php echo $r->fechanacimiento; ?></td>
                            <td><?php echo $r->telefono; ?></td>
                            <td><?php echo $r->numeroexpediente; ?></td>
                            <td class="center">
                                <a href="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('VerExpediente'); ?>&idexpediente=<?php echo base64_encode($r->idexpediente); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">search</i></a>
                            </td>
                            <td class="center">
                                <a href="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('EditarExpediente'); ?>&idexpediente=<?php echo base64_encode($r->idexpediente); ?>" title="Editar Registro" ><i class="mini material-icons azul-ast-text hoverable circle ">edit</i></a>
                            </td>
                            <td class="center">
                                <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('0'); ?>&idexpediente=<?php echo base64_encode($r->idexpediente); ?>" title="Desactivar Registro" ><i class="material-icons red-text hoverable circle mini">cancel</i></a>
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
                      <th>Id</th>
                          <th>Nombre</th>
                          <th>Edad</th>
                          <th>Peso</th>
                          <th>Fecha nacimiento</th>
                          <th>Teléfono</th>
                          <th># Expediente</th>
                          <th class="center">Activar</th>
                      </tr>
                  </thead>
                  <tbody>                  
                    <!-- inicio del cuerpo de la tabla inactivos -->
                    <?php foreach($this->model->ListarExpedientesInactivos() as $r): ?>
                        <tr>
                        <td><?php echo $r->idexpediente; ?></td>
                            <td><?php echo $r->nombre; ?></td>
                            <td><?php echo $r->edad; ?></td>
                            <td><?php echo $r->peso; ?></td>
                            <td><?php echo $r->fechanacimiento; ?></td>
                            <td><?php echo $r->telefono; ?></td>
                            <td><?php echo $r->numeroexpediente; ?></td>
                            <td class="center">
                                <a onclick="javascript:return confirm('¿Seguro que desea desactivar este registro?');" href="?c=<?php echo base64_encode('Expediente'); ?>&a=<?php echo base64_encode('CambiarEstado'); ?>&nuevo_estado=<?php echo base64_encode('1'); ?>&idexpediente=<?php echo base64_encode($r->idexpediente); ?>" title="Desactivar Registro" ><i class="material-icons green-text hoverable circle mini">check_circle</i></a>
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