<?php

class AccessControl
{
    public static $env;
    public static $debug;
}


if (stripos($_SERVER['HTTP_HOST'], 'local') !== false) {
    AccessControl::$env = 'dev';
    AccessControl::$debug = true;
} else {
    AccessControl::$env = 'prod';
    AccessControl::$debug = false;
}

if (AccessControl::$env == 'dev') {
    if (isset($_SERVER['HTTP_CLIENT_IP']) ||
        isset($_SERVER['HTTP_X_FORWARDED_FOR']) ||
        !(in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', 'fe80::1', '::1']) || php_sapi_name() === 'cli-server')
    ) {
        header('HTTP/1.0 403 Forbidden');
        exit('You are not allowed to access this file. Call someone to do something.');
    }
}
