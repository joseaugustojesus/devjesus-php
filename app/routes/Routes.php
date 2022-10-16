<?php

namespace app\routes;


class Routes
{

    public static function get()
    {
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/about-me' => 'HomeController@aboutMe'
            ],
            'post' => [
               
            ]
        ];
    }
}
