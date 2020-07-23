<?php
include_once "App/Models/Model.php";
class Region_Model implements Model
{
    public $Nombre;
    public $Color;
    
    public function Create()
    {
        $this->Nombre = $_POST['Nombre'];
        $this->Color = $_POST['Color'];
        setcookie("Region[" . uniqid() . "]", serialize($this), time() + (86400 * 30), '/');
    }
    public function Update()
    {
        $this->Nombre = $_POST['Nombre'];
        $this->Color = $_POST['Color'];
        setcookie("Region[" . $_GET['id'] . "]", serialize($this), time() + (86400 * 30), '/');
    }
    public function Delete()
    {
        setcookie("Region[" . $_POST['id'] . "]", "", time() - (86400 * 30), '/');
    }
}