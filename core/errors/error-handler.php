<?php
    namespace Errors;
    use Session\SessionHandler;
        class ErrorHandler {
                public function __construct() {
                }

                 public function setMessage($message) {
                    SessionHandler::set("ErrorMessage7416853ds1gv53",$message);
                 }

                 public function getMessage() {
                     return SessionHandler::get("ErrorMessage7416853ds1gv53");
                 }
                
        }