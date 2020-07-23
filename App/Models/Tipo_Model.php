<?php
include_once "App/Models/Model.php";
class Tipo_Model implements Model
{
    public $Nombre;

    public function Create()
    {
        $this->Nombre = $_POST['Nombre'];
        setcookie("Tipo[" . uniqid() . "]", serialize($this), time() + (86400 * 30), '/');
    }
    public function Update()
    {
        $this->Nombre = $_POST['Nombre'];
        setcookie("Tipo[" . $_GET['id'] . "]", serialize($this), time() + (86400 * 30), '/');
    }
    public function Delete()
    {
        setcookie("Tipo[" . $_POST['id'] . "]", "", time() - (86400 * 30), '/');
    }
}