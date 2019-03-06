<?php

namespace App\Controllers\Rest;

use Interart\Flywork\Controllers\RestController;

class ApplicationRestController extends RestController
{
    protected $need_auth = true;
    
    public function __construct()
    {
        parent::__construct();

        $this->defaul_filter = ['group_id' => $this->session->user->group_id];
    }

    protected function prepare_controller()
    {
        $this->is_logged = !empty($this->session->get('user'));

        parent::prepare_controller();
    }
}
