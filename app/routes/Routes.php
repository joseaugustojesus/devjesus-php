<?php

namespace app\routes;


class Routes
{

    public static function get()
    {
        return [
            'get' => [
                '/' => 'HomeController@aboutMe',
                // '/about-me' => 'HomeController@aboutMe'
            ],
            'post' => [
               
            ]
        ];
    }
}
