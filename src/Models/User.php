<?php

namespace App\Models;

use Interart\Flywork\Library\Model;


class User extends Model
{
    protected function init()
    {
        $this->table_name = 'users';
        $this->primary_key = 'id';
        $this->default_order_by = 'name';
        $this->columns = [
            'id',
            'group_id',
            'name',
            'email',
            'active',
            'created_at',
            'updated_at',
            'deleted',
        ];
    }

    public function validate()
    {
        return true;
    }

    public function findCustom(int $group_id)
    {
        $sql = "SELECT id, name FROM users WHERE group_id = :group";
        $params = [
            ':group' => $group_id
        ];
        $result = $this->db->query($sql, $params)->fetchAll();
        return $this->setResult($result);
    }
}