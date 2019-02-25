<?php
    namespace Errors;
    use Session\SessionHandler;
        class ErrorHandler {
            private $session;
                public function __construct() {
                    $this->session = SessionHandler::getInstance();
                }

                 public function setMessage($message) {
                     $this->session->set("ErrorMessage7416853ds1gv53", $message);
                 }

                 public function getMessage() {
                     return $this->session->get("ErrorMessage7416853ds1gv53");
                 }
                
        }