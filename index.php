<!DOCTYPE HTML>
<html>
    <head>
        <title>CaffeinePHP</title>
        <link href="resources/assets/css/bootstrap/bootstrap.css" rel="stylesheet">
        <script src="resources/assets/js/bootstrap/bootstrap.js"></script>
    </head>
        <body>
            <?php
    require_once __DIR__ . '/vendor/autoload.php';
    use DatabaseConnection\DBCon;
    use Errors\ErrorHandler;
    try{
        $instance2 = new DBCon();
    } catch(PDOException $e) {
        $err = new ErrorHandler();
        $err->setMessage($e->getMessage());
        $path = __DIR__.'/core/errors/error-handler.php';
//        header("Location: localhost:8080/CaffeinePHP/$path");
    }

    if(isset($_GET["url"])) {
        echo $_GET["url"];
        error_reporting(0);
        require_once "core/errors/error-message.php";
    }

    else {
        require_once "resources/CaffeinePHP.php";
    }
    ?>

        </body>
</html>
