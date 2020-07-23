<?php
include "App/Models/Region_Model.php";
class Region_Controller
{
    public $Region;

    function __construct()
    {
        $this->Region = new Region_Model();
    }

    public function Index()
    {
        require_once("App/Views/Region/Index.php");
    }

    public function Create()
    {
        $Colores = array(
            'Silver' => "#C0C0C0",
            'Gray' => "#808080",
            'Black' => "#000000",
            'Red' => "#FF0000",
            'Maroon' => "#800000",
            'Yellow' => "#FFFF00",
            'Olive' => "#808000",
            'Lime' => "#00FF00",
            'Blue' => "#0000FF",
            'Fuchsia' => "#FF00FF"
        );
        
        if ($_POST) {
            $this->Region->Create();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Region_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Region/Create.php");
    }

    public function Update()
    {
        $Datos = unserialize($_COOKIE["Region"][$_GET['id']]);
        if ($_POST) {
            $this->Region->Update();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Region_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Region/Update.php");
    }

    public function Delete()
    {
        if ($_POST) {
            $this->Region->Delete($_GET['id']);
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Region_Controller&Action=Index"); 
            </script>';
        }
        require_once("App/Views/Region/Delete.php");
    }
}