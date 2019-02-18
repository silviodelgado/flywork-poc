<?php

namespace App\Controllers;

class Test extends Home
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo 'Test! This controller is inherited from Home Controller.';
    }
}