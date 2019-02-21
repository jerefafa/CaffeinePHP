<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use ENV\Environment;
    $instance = Environment::getInstance();
    echo $instance->getUsername();