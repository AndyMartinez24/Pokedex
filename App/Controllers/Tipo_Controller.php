<?php
include "App/Models/Tipo_Model.php";
class Tipo_Controller
{

    public $Tipo;

    function __construct()
    {
        $this->Tipo = new Tipo_Model();
    }

    public function Index()
    {
        require_once("App/Views/Tipo/Index.php");
    }

    public function Create()
    {
        if ($_POST) {
            $this->Tipo->Create();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Tipo_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Tipo/Create.php");
    }

    public function Update()
    {
        $Datos = unserialize($_COOKIE["Tipo"][$_GET['id']]);
        if ($_POST) {
            $this->Tipo->Update();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Tipo_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Tipo/Update.php");
    }

    public function Delete()
    {
        if ($_POST) {
            $this->Tipo->Delete($_GET['id']);
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Tipo_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Tipo/Delete.php");
    }
}