<?php

namespace App\Controllers\Rest;

class Users extends ApplicationRestController
{
    public function __construct()
    {
        $this->entity_name = 'User';
        $this->order_by = 'name';
        
        parent::__construct();
    }
    
    public function list_all()
    {
        return $this->JsonResult(true, '', ['data' => $this->entity->findCustom(1)]);
    }

}