<?php

namespace App\Controllers;

class Logged_in_test extends ApplicationController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo '<h1>Usuário:</h1>';

        var_dump($this->session->user);
    }
}