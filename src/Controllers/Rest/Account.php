<?php

namespace App\Controllers\Rest;

class Account extends ApplicationRestController
{
    public function __construct()
    {
        $this->entity_name = 'User';
        $this->need_auth = false;

        parent::__construct();
    }

    public function test()
    {
        return $this->JsonResult(true, 'Other method.', ['data' => func_get_args()]);
    }
}
