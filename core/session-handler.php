<?php
    namespace Session;

        class SessionHandler {

            public static function getInstance() {
                return new self();
            }

            /**
             * SessionHandler constructor.
             * Constructor
             */
            public function __construct()
            {
                session_start();
            }

            /**
             * @param $key
             * @param $item
             * Sets the session by key and item
             */
            public function set($key, $item) {
                $_SESSION[$key] = $item;
                return;
            }

            /**
             * @param $key
             * @return mixed
             * returns the session by key
             */
            public function get($key) {
                return $_SESSION[$key];
            }

            /**
             * @param $key
             * removing a specific session
             */
            public function removeSession($key) {
                unset($_SESSION[$key]);
                return;
            }

            /**
             * destroys all session
             */
            public function removeAllSession() {
                session_destroy();
                return;
            }
        }