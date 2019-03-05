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
        echo 'session->get(\'user\'):';
        var_dump($this->session->get('user'));
        echo '<hr>session->user:';
        var_dump($this->session->user);
        echo '<hr>session->user->name:';
        var_dump($this->session->user->name ?? 'invalid');
        echo '<hr>session->id():';
        var_dump($this->session->id());
        echo '<hr>session->all():';
        var_dump($this->session->all());
        echo '<hr>'
            . '<a href="/session-test/set-session">Add Session</a><br>'
            . '<a href="/session-test/remove">Remove Session</a>';

        echo '<hr>';

        var_dump($_SESSION['sess_data']);
    }

    public function remove()
    {
        $this->session->clear();
        $this->redirect('/session-test/check');
    }
}
