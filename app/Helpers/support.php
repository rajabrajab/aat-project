<?php

if (!function_exists('userMenu')) {
    function userMenu()
    {
        $arr = require(app_path('Inc/menus.php'));
        return $arr['admin'];
    }
}
