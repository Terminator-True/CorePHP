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

    public function example($params)
    {
        return $this->view('test',['saludo'=>$params[0],'value'=>$params[1]]);
    }

}

