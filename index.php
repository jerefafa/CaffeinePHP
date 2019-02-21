<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use ENV\Environment;
    use DatabaseConnection\DBCon;
    $instance2 = new DBCon();
    echo json_encode($instance2->getDatabaseConnection());