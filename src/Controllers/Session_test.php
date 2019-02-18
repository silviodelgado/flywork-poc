<?php

namespace App\Controllers;

class Session_test extends ApplicationController
{
    protected $session;

    public function __construct()
    {
        $this->need_auth = false;
        parent::__construct();
    }

    public function index()
    {
        echo '<a href="/session-test/set-session">Set Session</a>';
    }

    public function set_session()
    {
        $this->session->set('user', [
            'id'       => 1,
            'group_id' => 1,
            'name'     => 'Silvio Delgado',
        ]);
        $this->redirect('/session-test/check');
    }

    public function check()
    {
        $user = $this->session->get('user');
        var_dump($user);
        echo '<hr>';
        var_dump($this->session->user['name']);
        echo '<hr>'
            . '<a href="/session-test/set-session">Add Session</a><br>'
            . '<a href="/session-test/remove">Remove Session</a>';
    }

    public function remove()
    {
        $this->session->clear();
        $this->redirect('/session-test/check');
    }
}
