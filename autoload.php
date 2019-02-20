<?php
     class AutoLoader {
        public function autoload() {
            require "environment.php";
            require "background/database-connection/dbcon.php";
        }
    }