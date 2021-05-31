<?php

require_once 'model/Consulta.php';
require_once 'model/Expediente.php';
// require_once 'model/PreguntaSecreta.php';

class ConsultaController{
    
    private $model;
    private $modelExpediente;
    // private $modelPreguntaSecreta;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Consulta();
        $this->modelExpediente = new Expediente();
        // $this->modelPreguntaSecreta = new PreguntaSecreta();
    }

    // home usuario  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_consulta.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear un usuario
    public function CrearConsulta(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_consulta.php';
        require_once 'view/pages/foot.php';
    }

    // guardar un usuario
    public function RegistrarConsulta(){
        //tomar todos los datos
        $this->model->antecedente_a = $_REQUEST["antecedente_a"];
        $this->model->antecedente_v = $_REQUEST["antecedente_v"];
        $this->model->antecedente_g = $_REQUEST["antecedente_g"];
        $this->model->antecedente_p = $_REQUEST["antecedente_p"];
        $this->model->motivo = $_REQUEST["motivo"];
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        $this->model->hora = $_REQUEST["hora"];
        $this->model->diagnostico = $_REQUEST["diagnostico"];
        $this->model->plan = $_REQUEST["plan"];
        $this->model->idexpediente = $_REQUEST["idexpediente"];

        //guardar el usuario
        $this->model->RegistrarConsulta($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Consulta')."';
            </script>";
        
    }

    // vista editar usuario
    public function EditarConsulta(){
        //tomar el id
        $idconsulta = base64_decode($_REQUEST["idconsulta"]);

        //obtener el registro con ese id
        $consulta = $this->model->ObtenerConsulta($idconsulta);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_consulta.php';
        require_once 'view/pages/foot.php';
        
    }

    // vista ver consulta
    public function VerConsulta()
    {
        //tomar el id
        $idconsulta = base64_decode($_REQUEST["idconsulta"]);

        //obtener el registro con ese id
        $consulta = $this->model->ObtenerConsulta($idconsulta);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/ver/ver_consulta.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar usuario
    public function ActualizarConsulta(){
        //tomar todos los datos
        $this->model->idconsulta = $_REQUEST["idconsulta"];
        $this->model->antecedente_a = $_REQUEST["antecedente_a"];
        $this->model->antecedente_v = $_REQUEST["antecedente_v"];
        $this->model->antecedente_g = $_REQUEST["antecedente_g"];
        $this->model->antecedente_p = $_REQUEST["antecedente_p"];
        $this->model->motivo = $_REQUEST["motivo"];
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        $this->model->hora = $_REQUEST["hora"];
        $this->model->diagnostico = $_REQUEST["diagnostico"];
        $this->model->plan = $_REQUEST["plan"];
        $this->model->idexpediente = $_REQUEST["idexpediente"];

        //actualizar la consulta
        $this->model->ActualizarConsulta($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Consulta')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idconsulta = base64_decode($_REQUEST["idconsulta"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoConsulta($nuevo_estado, $idconsulta);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Consulta')."';
            </script>";
        
    }
    
}

?>