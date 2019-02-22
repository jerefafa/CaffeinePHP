<?php
    require_once __DIR__ . '/vendor/autoload.php';
    use DatabaseConnection\DBCon;
    use Errors\ErrorHandler;

    try{
        $instance2 = new DBCon();
    } catch(PDOException $e) {
        $err = ErrorHandler::getInstance();
        $err->setMessage($e->getMessage());
        header("Location:core/errors/error-message.php");
    }