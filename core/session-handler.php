<?php
    namespace Session;
    session_start();
        class SessionHandler {

            public static function getInstance() {
                return new self();
            }

            /**
             * SessionHandler constructor.
             * Constructor
             */
            public function __construct()
            { }

            /**
             * @param $key
             * @param $item
             * Sets the session by key and item
             */
            public static function set($key, $item) {
                $_SESSION[$key] = $item;
                return;
            }

            /**
             * @param $key
             * @return mixed
             * returns the session by key
             */
            public static function get($key) {
                return $_SESSION[$key];
            }

            /**
             * @param $key
             * removing a specific session
             */
            public static function removeSession($key) {
                unset($_SESSION[$key]);
                return;
            }

            /**
             * destroys all session
             */
            public static function removeAllSession() {
                session_destroy();
                return;
            }
        }