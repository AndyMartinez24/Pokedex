<?php
include "App/Models/Pokemon_Model.php";
class Pokemon_Controller
{
    public $Pokemon;

    function __construct()
    {
        $this->Pokemon = new Pokemon_Model();
    }

    public function Index()
    {
        require_once("App/Views/Pokemon/Index.php");
    }

    public function Create()
    {
        if ($_POST) {
            if ($_POST['Tipo_1'] != "" && $_POST['Tipo_2'] != "" && $_POST['Region_id'] != "") {
                $this->Pokemon->Create();
                echo '
                <script>
                    alert("Accion realizada exitosamente");
                    window.location.assign("index.php?Controller=Pokemon_Controller&Action=Index");
                </script>';
            } else {
                echo '
                <script>
                    alert("Debes seleccionar almenos una region y un tipo");
                </script>';
            }
        }
        require_once("App/Views/Pokemon/Create.php");
    }


    public function Read()
    {
        $Pokemon = unserialize($_COOKIE["Pokemon"][$_GET['id']]);
        require_once("App/Views/Pokemon/Read.php");
    }

    public function Update()
    {
        $Pokemon = unserialize($_COOKIE["Pokemon"][$_GET['id']]);
        if ($_POST) {
            $this->Pokemon->Update();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Pokemon_Controller&Action=Read&id=' . $_GET['id'] . '"); 
            </script>';
        }
        require_once("App/Views/Pokemon/Update.php");
    }

    public function Delete()
    {
        if ($_POST) {
            $this->Pokemon->Delete();
            echo '
            <script>
                alert("Accion realizada exitosamente");
                window.location.assign("index.php?Controller=Pokemon_Controller&Action=Index");
            </script>';
        }
        require_once("App/Views/Pokemon/Delete.php");
    }
}