<?php

namespace app\support;

class Uri
{
    public static function get()
    {

        if ($_SERVER['SERVER_NAME'] !== 'localhost') {
            $uri = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
            $uri = array_filter($uri);
            unset($uri[1], $uri[2]);
            $uri = implode('/', $uri);
        } else {
            $uri = $_SERVER['REQUEST_URI'];
            if($position = strpos($uri, '?')) $uri = substr($uri, 0, $position);
            return $uri;
        }

        return '/' . $uri;
    }
}
