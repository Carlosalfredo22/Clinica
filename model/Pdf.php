<?php
    class Pdf
    {
        private $pdo; //Para la bd

        public function __CONSTRUCT()
        {
            try 
            {
                $this->pdo = Conexion::Conectar();
            }
            catch (Throwable $t) 
            {
                die($t->getMessage());
            }
        }

        public function CitaActivo(){
            echo "<script>
            alert('Hola desde cita activo')
            </script>";
        }
    }
    
?>