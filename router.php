<?php
include "App/Controllers/Pokemon_Controller.php";
include "App/Controllers/Tipo_Controller.php";
include "App/Controllers/Region_Controller.php";

if (isset($_GET["Controller"]) && isset($_GET["Action"])) {

    $Controller = $_GET["Controller"];

    $Controller_page = new $Controller;

    call_user_func(array($Controller_page, $_GET["Action"]));
} else {
    require_once("App/Views/Pokemon/Index.php");
}