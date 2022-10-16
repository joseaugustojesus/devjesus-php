<?php

namespace app\controllers;


class HomeController extends Controller
{
    /**
     * It returns the view `home` with an empty array as the second parameter
     * 
     * @return The view function is being returned.
     */
    public function index()
    {
        return $this->view('home', []);
    }

    public function aboutMe()
    {
        return $this->view('about-me', []);
    }
}
