<?php
include "App/Helpers/File_Helper.php";
include_once "App/Models/Model.php";
class Pokemon_Model implements Model
{
    public $id;
    public $Nombre;
    public $Tipos = array();
    public $Ataques;
    public $Region;

    public function Create()
    {
        $this->id = uniqid();
        $this->Nombre = $_POST['Nombre'];
        array_push($this->Tipos, $_POST['Tipo_1'], $_POST['Tipo_2']);
        $this->Ataques = $_POST['Ataques'];
        $this->Region = $_POST['Region_id'];
        setcookie("Pokemon[" . $this->id  . "]", serialize($this), time() + (86400 * 30), '/');

        Update_Photo($this->id);
    }
    public function Update()
    {
        $this->id = $_GET['id'];
        $this->Nombre = $_POST['Nombre'];
        array_push($this->Tipos, $_POST['Tipo_1'], $_POST['Tipo_2']);
        $this->Ataques = $_POST['Ataques'];
        $this->Region = $_POST['Region_id'];

        if ($_FILES['foto']["name"] != null) {
            if (file_exists("img/" . $_GET['id'])) {
                unlink("img/" . $_GET['id']);
            }
            Update_Photo($_GET['id']);
        }

        setcookie("Pokemon[" . $this->id  . "]", serialize($this), time() + (86400 * 30), '/');
    }
    public function Delete()
    {
        setcookie("Pokemon[" . $_POST['id'] . "]", "", time() - (86400 * 30), '/');
    }
}