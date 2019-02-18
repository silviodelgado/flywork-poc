<?php

namespace App\Controllers;

use Interart\Flywork\Traits\BundleManager;
use Interart\Flywork\Controllers\Controller;

abstract class ApplicationController extends Controller
{
    use BundleManager;

    protected $need_auth = true;
    
    public function __construct()
    {
        parent::__construct();
    }

    protected function prepare_controller()
    {
        $this->is_logged = !empty($this->session->get('user'));

        parent::prepare_controller();
    }

    protected function handle_not_authenticated()
    {
        $this->session->flash('error', 'You\'re not logged in or your session has expired.');
        return $this->redirect("/login?returnUrl=" . urlencode(filter_input(INPUT_SERVER, 'REQUEST_URI')));
    }
}
