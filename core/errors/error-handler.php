<?php
    namespace Errors;
        class ErrorHandler {
            private static $instance;
            private $errorMessage = "";

            private function __construct() {}
            
                public static function getInstance() {
                    if(self::$instance === null) {
                        self::$instance = new self();
                    }
                    return self::$instance;
                 }

                 public function setMessage($message) {
                     $this->errorMessage = $message;
                 }

                 public function getMessage() {
                     return $this->errorMessage;
                 }
                
        }