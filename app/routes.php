<?php
    namespace App;
    class Route
    {
        function getRoutes()
        {
            return $routes = [
                '/' => [
                    'GET',
                    '',
                    'resources/CaffeinePHP'
                ]
            ];
        }
    }