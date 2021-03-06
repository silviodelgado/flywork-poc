<?php

namespace App\Controllers;

class Users extends ApplicationController
{
    public function __construct()
    {
        $this->entity_name = 'User';

        parent::__construct();

        $this->defaul_filter = ['group_id' => $this->session->user->group_id];
    }

    public function index()
    {
        $viewbag = [
            'title' => 'Users',
            'users' => $this->entity->FindAll('name', 'ASC', $this->defaul_filter)->result(),
        ];
        return $this->view($viewbag, 'Users/list');
    }

    public function add()
    {
        return $this->view(['title' => 'Add User'], 'Users/form');
    }

    public function edit($id)
    {
        $user = $this->entity->findById($id, $this->defaul_filter);
        //if (!$user->numRows()) {
        if (!$user->hasResult()) {
            throw new \InvalidArgumentException('Invalid user id');
        }

        $viewbag = array_merge(['title' => 'Edit User'], $user->result());
        $this->view($viewbag, 'Users/form');
    }

}
