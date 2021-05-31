<?php

require_once 'model/Embarazo.php';
require_once 'model/Consulta.php';
// require_once 'model/PreguntaSecreta.php';

class EmbarazoController{
    
    private $model;
    private $modelConsulta;
    // private $modelPreguntaSecreta;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Embarazo();
        $this->modelConsulta = new Consulta();
        // $this->modelPreguntaSecreta = new PreguntaSecreta();
    }

    // home usuario  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_embarazo.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear un usuario
    public function CrearEmbarazo(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_embarazo.php';
        require_once 'view/pages/foot.php';
    }

    // guardar un usuario
    public function RegistrarEmbarazo(){
        //tomar todos los datos
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->fechanacimiento = $_REQUEST["fechanacimiento"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->alfabeta = $_REQUEST["alfabeta"];
        $this->model->estadocivil = $_REQUEST["estadocivil"];
        $this->model->estudios = $_REQUEST["estudios"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->edad = $_REQUEST["edad"];
        $this->model->gestacionactual = $_REQUEST["gestacionactual"];
        $this->model->embarazoplanificado = $_REQUEST["embarazoplanificado"];
        $this->model->talla = $_REQUEST["talla"];
        $this->model->pesoinicial = $_REQUEST["pesoinicial"];
        $this->model->ultimoembarazo = $_REQUEST["ultimoembarazo"];
        $this->model->gestacionesprevias = $_REQUEST["gestacionesprevias"];
        $this->model->abortos = $_REQUEST["abortos"];
        $this->model->partosvaginales = $_REQUEST["partosvaginales"];
        $this->model->nacidosvivos = $_REQUEST["nacidosvivos"];
        $this->model->viven = $_REQUEST["viven"];
        $this->model->partos = $_REQUEST["partos"];
        $this->model->cesareas = $_REQUEST["cesareas"];
        $this->model->nacidosbajopeso = $_REQUEST["nacidosbajopeso"];
        $this->model->idconsulta  = $_REQUEST["idconsulta"];


        //guardar el usuario
        $this->model->RegistrarEmbarazo($this->model);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Los datos fueron guardados.');
                window.location.href='?c=".base64_encode('Embarazo')."';
            </script>";
        
    }

    // vista editar usuario
    public function EditarEmbarazo(){
        //tomar el id
        $idembarazo = base64_decode($_REQUEST["idembarazo"]);

        //obtener el registro con ese id
        $embarazo = $this->model->ObtenerEmbarazo($idembarazo);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_embarazo.php';
        require_once 'view/pages/foot.php';
        
    }

     // vista ver embarazo
     public function VerEmbarazo(){
        //tomar el id
        $idembarazo = base64_decode($_REQUEST["idembarazo"]);

        //obtener el registro con ese id
        $embarazo = $this->model->ObtenerEmbarazo($idembarazo);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/ver/ver_embarazo.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar embarazo
    public function ActualizarEmbarazo(){
        //tomar todos los datos
        $this->model->idembarazo = $_REQUEST["idembarazo"];
        $this->model->nombre = $_REQUEST["nombre"];
        $this->model->fechanacimiento = $_REQUEST["fechanacimiento"];
        $this->model->direccion = $_REQUEST["direccion"];
        $this->model->alfabeta = $_REQUEST["alfabeta"];
        $this->model->estadocivil = $_REQUEST["estadocivil"];
        $this->model->estudios = $_REQUEST["estudios"];
        $this->model->telefono = $_REQUEST["telefono"];
        $this->model->edad = $_REQUEST["edad"];
        $this->model->gestacionactual = $_REQUEST["gestacionactual"];
        $this->model->embarazoplanificado = $_REQUEST["embarazoplanificado"];
        $this->model->talla = $_REQUEST["talla"];
        $this->model->pesoinicial = $_REQUEST["pesoinicial"];
        $this->model->ultimoembarazo = $_REQUEST["ultimoembarazo"];
        $this->model->gestacionesprevias = $_REQUEST["gestacionesprevias"];
        $this->model->abortos = $_REQUEST["abortos"];
        $this->model->partosvaginales = $_REQUEST["partosvaginales"];
        $this->model->nacidosvivos = $_REQUEST["nacidosvivos"];
        $this->model->viven = $_REQUEST["viven"];
        $this->model->partos = $_REQUEST["partos"];
        $this->model->cesareas = $_REQUEST["cesareas"];
        $this->model->nacidosbajopeso = $_REQUEST["nacidosbajopeso"];
        $this->model->idconsulta = $_REQUEST["idconsulta"];

        //actualizar el usuario
        $this->model->ActualizarEmbarazo($this->model);

        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Embarazo')."';
            </script>";
        
    }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idembarazo = base64_decode($_REQUEST["idembarazo"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoEmbarazo($nuevo_estado, $idembarazo);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Embarazo')."';
            </script>";
        
    }
    
}

?>