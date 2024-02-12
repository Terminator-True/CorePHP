<?php

namespace Controllers;
require APPROOT . '\\app\\Controllers\\Controller.php';
use Controller;

class HomeController extends Controller
{

    public function index()
    {
        return $this->view('home');
    }

}