<?php

namespace App\Controllers;

use Interart\Flywork\Library\Security;

class Security_test extends ApplicationController
{
    protected $need_auth = false;
    private $security;

    public function __construct()
    {
        parent::__construct();

        $this->security = new Security();
    }

    public function index()
    {
        if ($this->security->comparePassword('abc123', '$2y$10$p1vW7Nl5jTkZUs15MNufduX4P6Wd4xXmPqWA3h7Jo2eTD0leVcJ2y')) {
            echo 'Passwords match!';
        } else {
            echo 'Passwords mismatch!';
        }
    }

    public function encrypt()
    {
        $plain = 'test plain text';

        $encrypted = $this->security->encrypt($plain);

        echo 'Plain: ' . $plain . '<br>'
            . 'Encrypted: ' . $encrypted . '<br>';
    }

    public function decrypt()
    {
        $encrypted = 'VkdUbXNQTjhLdGJqQitDZG1MNC90c1U9';

        $plain = $this->security->decrypt($encrypted);

        echo 'Encrypted: ' . $encrypted . '<br>'
            . 'Plain: ' . $plain . '<br>';
    }
}
