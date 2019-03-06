<?php

namespace App\Controllers;

use Interart\Flywork\Controllers\Controller;
use Interart\Flywork\Traits\BundleManager;
use Interart\Flywork\Library\Session;

abstract class ApplicationController extends Controller
{
    use BundleManager;

    protected $need_auth = true;

    public function __construct()
    {
        $this->session = new Session('', 0, '.flywork.test', true);
        parent::__construct();
    }

    protected function prepare_controller()
    {
        $this->is_logged = !empty($this->session->user);
        $this->is_admin = $this->is_logged && $this->session->user->admin;
        
        parent::prepare_controller();
    }
    
    protected function handle_not_authenticated()
    {
        $this->session->flash('error', 'You\'re not logged in or your session has expired.');
        return $this->redirect("/login?returnUrl=" . urlencode(filter_input(INPUT_SERVER, 'REQUEST_URI')));
    }

    protected function handle_not_administrator()
    {
        $this->session->flash('error', 'You do not have permission to access this module.');
        return $this->redirect('/');
    }

    public function _start()
    {

    }
}
