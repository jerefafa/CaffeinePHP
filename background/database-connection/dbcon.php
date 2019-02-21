<?php
        class DBCon
        {
            private $env;
            public $db;
            private static $instance;
            function __construct()
            {
                $this->env = Environment::getInstance();
                $this->db = new PDO("mysql:host='" . $this->env->getHost() . "';dbname='" . $this->env->getDatabase() . "'",
                    $this->env->getUsername(),
                    $this->env->getPassword());
            }

            public static function getInstance() {
                if(self::$instance === null) {
                    self::$instance = new self();
                }
                return self::$instance;
            }

            public function getDatabaseConnection()
            {
                return $instance;
            }
        }

