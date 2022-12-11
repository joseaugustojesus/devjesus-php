<?php

namespace app\support;

class Uri
{
    public static function get()
    {

        $uri = $_SERVER['REQUEST_URI'];
        if ($position = strpos($uri, '?')) $uri = substr($uri, 0, $position);
        
        $uri = str_replace(['//'], ['/'], $uri);
        return $uri;
    }
}
