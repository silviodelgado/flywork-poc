<?php

namespace App\Controllers;

class AdminController extends ApplicationController
{
    protected $need_admin = true;

    public function __construct()
    {
        parent::__construct();

    }
}