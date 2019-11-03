<?php
require_once "controllers/inicio.controller.php";
require_once "controllers/revista.controller.php";
require_once "controllers/cliente.controller.php";
require_once "controllers/autor.controller.php";
require_once "controllers/articulo.controller.php";
require_once "controllers/escribe.controller.php";
require_once "controllers/suscrito.controller.php";

if(isset($_REQUEST['c']))
{
    $controller = $_REQUEST['c'];
}
else {
    $controller = 'inicio';
}

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{

    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}
