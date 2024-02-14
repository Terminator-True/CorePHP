<?php

require_once 'Controller.php';

class HomeController extends Controller
{

    public function index()
    {
        return $this->view('home');
    }
    public function notFound()
    {
        return $this->view('404');
    }

}

