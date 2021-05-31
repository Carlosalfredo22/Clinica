<?php

require_once 'model/Examen.php';
require_once 'model/Consulta.php';

class ExamenController{
    
    private $model;
    private $modelConsulta;
    
    public function __CONSTRUCT(){
        //inicializa los modelos
        $this->model = new Examen();
        $this->modelConsulta = new Consulta();
        
    }

    // home cita  
    public function Index(){
        //muestra todas las partes de la vista read
        require_once 'view/pages/header.php';
        require_once 'view/pages/read/read_examen.php';
        require_once 'view/pages/foot_read.php';
    }
       
    // vista crear una cita
    public function CrearExamen(){
        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/create/create_examen.php';
        require_once 'view/pages/foot.php';
    }

    // guardar una cita
    public function RegistrarExamen(){
        //tomar todos los datos
        foreach($_FILES["examen"]['tmp_name'] as $key => $tmp_name) {
        
            //condicional si el fuchero existe
            if($_FILES["examen"]["name"][$key]) {
                // Nombres de archivos de temporales
                $archivonombre = $_FILES["examen"]["name"][$key]; 
                $fuente = $_FILES["examen"]["tmp_name"][$key]; 
                
                $carpeta = 'documents'; //Declaramos el nombre de la carpeta que guardara los archivos
                
                if(!file_exists($carpeta)){
                    mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento");	
                }
                
                $dir=opendir($carpeta);
                $target_path = $carpeta.'/'.$archivonombre; //indicamos la ruta de destino de los archivos
                
        
                if(move_uploaded_file($fuente, $target_path)) {	
                    echo "Los archivos $archivonombre se han cargado de forma correcta.<br>";
                    } else {	
                    echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo.<br>";
                    }
                closedir($dir); //Cerramos la conexion con la carpeta destino
                }
            }

                $fecha = date_create($_REQUEST["fecha"]);
                $this->model->fecha = date_format($fecha, 'Y-m-d');
                $this->model->titulo = $_REQUEST["titulo"];
                $this->model->examenruta = $target_path;
                $this->model->idconsulta = $_REQUEST["idconsulta"];

                //actualizar el cita
                $this->model->RegistrarExamen($this->model);
        
                echo "<script>
                        alert('CORRECTO: Registro Guardado.');
                        window.location.href='?c=".base64_encode('Examen')."';
                    </script>";
    }


    // vista editar cita
    public function EditarExamen(){
        //tomar el id
        $idexamen = base64_decode($_REQUEST["idexamen"]);

        //obtener el registro con ese id
        $examen = $this->model->ObtenerExamen($idexamen);

        //muestra todas las partes de la vista create
        require_once 'view/pages/header.php';
        require_once 'view/pages/update/update_examen.php';
        require_once 'view/pages/foot.php';
        
    }

    // actualizar cita
    public function ActualizarExamen(){
        //tomar todos los datos
        foreach($_FILES["examen"]['tmp_name'] as $key => $tmp_name) {
        
            //condicional si el fuchero existe
            if($_FILES["examen"]["name"][$key]) {
                // Nombres de archivos de temporales
                $archivonombre = $_FILES["examen"]["name"][$key]; 
                $fuente = $_FILES["examen"]["tmp_name"][$key]; 
                
                $carpeta = 'documents'; //Declaramos el nombre de la carpeta que guardara los archivos
                
                if(!file_exists($carpeta)){
                    mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento");	
                }
                
                $dir=opendir($carpeta);
                $target_path = $carpeta.'/'.$archivonombre; //indicamos la ruta de destino de los archivos
                
        
                if(move_uploaded_file($fuente, $target_path)) {	
                    echo "Los archivos $archivonombre se han cargado de forma correcta.<br>";
                    } else {	
                    echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo.<br>";
                    }
                closedir($dir); //Cerramos la conexion con la carpeta destino
                }
            }

                $this->model->idexamen = $_REQUEST["idexamen"];
                $fecha = date_create($_REQUEST["fecha"]);
                $this->model->fecha = date_format($fecha, 'Y-m-d');
                $this->model->titulo = $_REQUEST["titulo"];
                $this->model->examenruta = $target_path;
                $this->model->idconsulta = $_REQUEST["idconsulta"];

                //actualizar el cita
                $this->model->ActualizarExamen($this->model);
        
                echo "<script>
                        alert('CORRECTO: Registro modificado.');
                        window.location.href='?c=".base64_encode('Examen')."';
                    </script>";
            }

    // cambiar estado
    public function CambiarEstado(){
        //tomar id y nuevo estado
        $idexamen = base64_decode($_REQUEST["idexamen"]);
        $nuevo_estado = base64_decode($_REQUEST["nuevo_estado"]);

        //cambiar estado
        $this->model->CambiarEstadoExamen($nuevo_estado, $idexamen);

        //muestra la vista read
        echo "<script>
                alert('CORRECTO: Registro modificado.');
                window.location.href='?c=".base64_encode('Examen')."';
            </script>";
        
    }
}