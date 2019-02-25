<?php
    require_once "../../vendor/autoload.php";
    use Errors\ErrorHandler;
    $errorHandler = new ErrorHandler();
?>
<!DOCTYPE HTML>
    <html>
        <head>
            <title>Error Message</title>
             <link href="../../resources/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
            <script src="../../resources/assets/js/bootstrap/bootstrap.min.js"></script>
        </head>
        <body>
            <div class="col lg 12">
                <h1 class="btn-outline-danger">ERROR!!</h1>
                <div class="bg-warning">
            <?php
                if($errorHandler->getMessage() === "" ) {
                    echo "Undefined Error";
                }
                else {
                    echo $errorHandler->getMessage();
                }
            ?>
                </div>
            </div>
        </body>
    </html>