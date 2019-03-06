<?php

namespace App\Controllers;

use Interart\Flywork\Library\Input;

class Login extends ApplicationController
{
    protected $input;

    public function __construct()
    {
        $this->need_auth = false;
        parent::__construct();

        $this->input = new Input();
    }

    public function index()
    {
        $return_url = $this->input->get('returnUrl') ?? urlencode('/');
        $data = [
            'bundle_css' => $this->bundle('css', ['app']),
            'bundle_js'  => $this->bundle('js', ['jquery-3.3.1.min', 'app']),
            'error'      => $this->session->flash('error'),
            'returnUrl'  => $return_url,
        ];

        $this->view($data, 'login');
    }

    public function do_login()
    {
        $this->session->set('user', [
            'id'       => 1,
            'group_id' => 1,
            'name'     => 'Silvio Delgado',
            'admin'    => false,
        ]);

        $return_url = $this->input->get('returnUrl') ?? urlencode('/');
        $this->redirect($return_url);
    }

    public function logout()
    {
        $this->session->clear();
        $this->session->flash('success', 'Logged out successfully!');

        $this->redirect('/');
    }
}
