<?php
    namespace ENV;
        class Environment {
         /**
          * @var string Host
          */
         private $host = '127.0.0.';

         /**
          * @var string Host Username
          */
         private $username = 'root';

         /**
          * @var string Host Password
          */
         private $password = 'root';

         /**
          * @var string Database Name
          */
         private $database = 'configurator';

         /**
          * Do not edit beyond this comment
          */


         /**
          * @return string
          * Returns the host name
          */
         public function getHost() {
             return $this->host;
         }

         /**
          * @return string
          * Returns the Username
          */
         public function getUsername() {
             return $this->username;
         }

         /**
          * @return string
          * Returns the password
          */
         public function getPassword() {
             return $this->password;
         }

         /**
          * @return string
          * Returns the database name
          */
         public function getDatabase() {
             return $this->database;
         }

         /**
          * Environment constructor.
          */
         private function __construct(){
         }

         /**
          * @var Environment Instance
          */
         private static $environmentInstance;

         /**
          * @return Environment getEnvironment
          * Do not edit this code
          */
         public static function getInstance() {
            if(self::$environmentInstance === null) {
                self::$environmentInstance = new self();
            }
            return self::$environmentInstance;
         }


     }
