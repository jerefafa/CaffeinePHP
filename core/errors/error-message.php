<?php
    require_once '../../vendor/autoload.php';
    $errorHandler = \Errors\ErrorHandler::getInstance();
?>
<!DOCTYPE HTML>
    <html>
        <head>
            <title>Error Message</title>
            <!-- <link href="../resources/assets/css/bootstrap/bootstrap.min.css">
            <script src="../resources/assets/js/bootstrap/bootstrap.min.js"></script> -->
        </head>
        <body>
            <div class="col lg 12">
            <?php
                if($errorHandler->getMessage() === "" ) {
                    echo "Undefined Error";
                }
                else {
                    echo $errorHandler->getMessage();
                }
            ?>
            </div>
        </body>
    </html>