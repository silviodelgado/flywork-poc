<?php

namespace App\Controllers;

use Interart\Flywork\Library\Log\LogManager;

class Logger extends ApplicationController
{
    protected $need_auth = false;
    protected $log;

    public function __construct()
    {
        parent::__construct();
    }

    public function _start()
    {
        $this->log = new LogManager(LogManager::STORAGE_TYPE_DB, $this->db->pdo);
    }
    
    public function index()
    {
        $this->log->alert('test log');
    }

    public function file()
    {
        $this->log = new LogManager();
        $this->log->setPath(WRITEPATH . 'logs');

        $this->log->critical('Test file log');
    }
}
