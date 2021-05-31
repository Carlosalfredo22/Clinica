<?php

require_once 'model/Expediente.php';

class ExpedienteController{
    
    private $model;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Expediente();
    }

    // home usuario  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_expediente.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear un usuario
    public function CrearExpediente(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_expediente.php';
        require_once 'view/pages/foot.php';
    }

    // guardar un usuario
    public function RegistrarExpediente(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->edad = $_REQUEST["edad"];
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        // $this->model->fecha = $_REQUEST["fecha"];
        $this->model->peso = $_REQUEST["peso"];
        $fechanacimiento = date_create($_REQUEST["fechanacimiento"]);
        $this->model->fechanacimiento = date_format($fechanacimiento, 'Y-m-d');
        $this->model->estadocivil = $_REQUEST["estadocivil"];
        $this->model->ocupacion = $_REQUEST["ocupacion"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->alergias = $_REQUEST["alergias"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->motivo = $_REQUEST["motivo"];
        $this->model->numeroexpediente = $_REQUEST["numeroexpediente"];
        $this->model->otrosdatos = $_REQUEST["otrosdatos"];

        //guardar el usuario
        $this->model->RegistrarExpediente($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Expediente')."';
            </script>";
        
    }

    // vista editar usuario
    public function EditarExpediente(){
        //tomar el id
        $idexpediente = base64_decode($_REQUEST["idexpediente"]);

        //obtener el registro con ese id
        $expediente = $this->model->ObtenerExpediente($idexpediente);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_expediente.php';
        require_once 'view/pages/foot.php';
        
    }

    // vista ver expediente
    public function VerExpediente()
    {
        //tomar el id
        $idexpediente = base64_decode($_REQUEST["idexpediente"]);

        //obtener el registro con ese id
        $expediente = $this->model->ObtenerExpediente($idexpediente);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/ver/ver_expediente.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar usuario
    public function ActualizarExpediente(){
        //tomar todos los datos
        $this->model->idexpediente = $_REQUEST["idexpediente"];
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->edad = $_REQUEST["edad"];
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        // $this->model->fecha = $_REQUEST["fecha"];
        $this->model->peso = $_REQUEST["peso"];
        $fechanacimiento = date_create($_REQUEST["fechanacimiento"]);
        $this->model->fechanacimiento = date_format($fechanacimiento, 'Y-m-d');
        // $this->model->fechanacimiento = $_REQUEST["fechanacimiento"];
        $this->model->estadocivil = $_REQUEST["estadocivil"];
        $this->model->ocupacion = $_REQUEST["ocupacion"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->alergias = $_REQUEST["alergias"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->motivo = $_REQUEST["motivo"];
        $this->model->numeroexpediente = $_REQUEST["numeroexpediente"];
        $this->model->otrosdatos = $_REQUEST["otrosdatos"];


        //actualizar el usuario
        $this->model->ActualizarExpediente($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Expediente')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idexpediente = base64_decode($_REQUEST["idexpediente"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoExpediente($nuevo_estado, $idexpediente);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Expediente')."';
            </script>";
        
    }  
}

?>