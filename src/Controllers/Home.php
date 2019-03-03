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
        return $this->view(['success' => $this->session->flash('success')]);
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

    public function date()
    {
        $input = new \Interart\Flywork\Library\Input();

        $this->view(['dt' => $input->getDateTime('dt')], 'Home/dates');
    }

    public function db_test()
    {
        var_dump($this->db);
        echo '<hr>';
        var_dump($this->db->query('select database()')->fetchColumn());
    }
}
