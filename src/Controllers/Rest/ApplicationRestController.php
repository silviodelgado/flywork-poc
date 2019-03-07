<?php

namespace App\Controllers\Rest;

use Interart\Flywork\Controllers\RestController;
use Interart\Flywork\Library\Session;

class ApplicationRestController extends RestController
{
    protected $need_auth = true;
    
    public function __construct()
    {
        $this->session = new Session('', 0, '.flywork.test', true);
        $this->defaul_filter = ['group_id' => $this->session->user->group_id];
        
        parent::__construct();
    }

    protected function prepare_controller()
    {
        $this->is_logged = !empty($this->session->get('user'));

        parent::prepare_controller();
    }

    public function _start()
    {

    }
}
