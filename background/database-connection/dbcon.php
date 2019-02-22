<?php
        namespace DatabaseConnection;
        use ENV\Environment;
        use \PDO;
        class DBCon
        {
            private $env;
            private $db;
            public function __construct()
            {              
                try{
                $this->env = Environment::getInstance();
                $this->db = new PDO("mysql:host=" . $this->env->getHost() .";dbname=".$this->env->getDatabase(),
                    $this->env->getUsername(),
                    $this->env->getPassword());    
                    $this->env->getPassword();       
                    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
                } catch(PDOException $e) {
                    echo 'asd';
                }
            }

            public function getConnection() {
                return $this->db;
            }
        }

