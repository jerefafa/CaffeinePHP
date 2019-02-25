<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use App\Route;
    $router = new Route();
    $path = $router->getRoutes()['/'][2];
    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ?
            "https"
            : "http")
        . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".$path;
    header("Location: ".$link);
