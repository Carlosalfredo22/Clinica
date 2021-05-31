<?php

require_once 'model/Cita.php';
require_once 'model/Usuario.php';
require_once 'model/Expediente.php';

class CitaController{
    
    private $model;
    private $modelUsuario;
    private $modelExpediente;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Cita();
        $this->modelUsuario = new Usuario();
        $this->modelExpediente = new Expediente();
    }

    // home cita  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_cita.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear una cita
    public function CrearCita(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_cita.php';
        require_once 'view/pages/foot.php';
    }

    // guardar una cita
    public function RegistrarCita(){
        //tomar todos los datos
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        // $this->fecha->fecha = $_REQUEST["fecha"];
        $this->model->hora = $_REQUEST["hora"];
        $this->model->idusuario = $_REQUEST["idusuario"];
        $this->model->idexpediente = $_REQUEST["idexpediente"];

        //guardar una cita
        $this->model->RegistrarCita($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Cita')."';
            </script>";
        
    }

    // vista editar cita
    public function EditarCita(){
        //tomar el id
        $idcita = base64_decode($_REQUEST["idcita"]);

        //obtener el registro con ese id
        $cita = $this->model->ObtenerCita($idcita);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_cita.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar cita
    public function ActualizarCita(){
        //tomar todos los datos
        $this->model->idcita = $_REQUEST["idcita"];
        $fecha = date_create($_REQUEST["fecha"]);
        $this->model->fecha = date_format($fecha, 'Y-m-d');
        // $this->fecha->fecha = $_REQUEST["fecha"];
        $this->model->hora = $_REQUEST["hora"];
        $this->model->idusuario = $_REQUEST["idusuario"];
        $this->model->idexpediente = $_REQUEST["idexpediente"];

        //actualizar el cita
        $this->model->ActualizarCita($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Cita')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idcita = base64_decode($_REQUEST["idcita"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoCita($nuevo_estado, $idcita);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Cita')."';
            </script>";
        
    }

    // // vista cambiar clave
    // public function NuevaClave(){
    //     //obtener el registro con ese id
    //     $usuario = $this->model->ObtenerUsuario($_SESSION["id"]);

    //     //muestra todas las partes de la vista create
    //     require_once 'view/pages/header.php';
    //     require_once 'view/pages/update/update_password.php';
    //     require_once 'view/pages/foot.php';
        
    // }

    // // actualizar clave
    // public function ActualizarClave(){
    //     //tomar todos los datos
    //     $idusuario = $_REQUEST["idusuario"];
    //     $clave = $_REQUEST["clave1"];

    //     //actualizar el usuario
    //     $this->model->ActualizarClave($clave, $idusuario);

    //     echo "<script>
    //             alert('CORRECTO: Registro modificado.\\n\\nNO OLVIDE SU NUEVA CLAVE.');
    //             window.location.href='?c=".base64_encode('Home')."';
    //         </script>";
        
    // }

    // // vista cambiar clave
    // public function NuevaPregunta(){
    //     //obtener el registro con ese id
    //     $usuario = $this->model->ObtenerUsuario($_SESSION["id"]);

    //     //muestra todas las partes de la vista create
    //     require_once 'view/pages/header.php';
    //     require_once 'view/pages/update/update_question.php';
    //     require_once 'view/pages/foot.php';
        
    // }

    // // actualizar clave
    // public function ActualizarPregunta(){
    //     //tomar todos los datos
    //     $idusuario = $_REQUEST["idusuario"];
    //     $idpreguntasecreta = $_REQUEST["idpreguntasecreta"];
    //     $respuestasecreta = $_REQUEST["respuestasecreta1"];

    //     //actualizar el usuario
    //     $this->model->ActualizarPregunta($idpreguntasecreta, $respuestasecreta, $idusuario);

    //     echo "<script>
    //             alert('CORRECTO: Registro modificado.\\n\\nNO OLVIDE SU PREGUNTA Y RESPUESTA.');
    //             window.location.href='?c=".base64_encode('Home')."';
    //         </script>";
        
    // }
    
}

?>