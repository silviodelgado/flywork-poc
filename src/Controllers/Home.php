<?php

namespace App\Controllers;

class Home extends ApplicationController
{
    public function __construct()
    {
        $this->need_auth = false;
        parent::__construct();
    }

    public function index()
    {
        return $this->view(['success'    => $this->session->flash('success')]);
    }

    public function test()
    {
        return $this->view(['foo' => 'bar'], 'Home/testing');
    }

    public function other_test()
    {
        echo 'Hello again!';
    }

    public function invalid()
    {
        throw new \Exception('Injected exception');
    }
}