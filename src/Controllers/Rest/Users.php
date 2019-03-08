<?php

namespace App\Controllers\Rest;

class Users extends ApplicationRestController
{
    public function __construct()
    {
        $this->entity_name = 'User';
        
        parent::__construct();
    }
    
    public function list_all()
    {
        return $this->JsonResult(true, '', ['data' => $this->entity->findCustom(1)]);
    }

}