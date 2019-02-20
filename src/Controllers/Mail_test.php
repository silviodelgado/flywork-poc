<?php

namespace App\Controllers;

use Interart\Flywork\Library\Mail\PhpMailerHandler;

class Mail_test extends ApplicationController
{
    protected $need_auth = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //var_dump(class_exists('Interart\\Flywork\\Library\\Mail\\PhpMailerHandler'));
        $mailer = new PhpMailerHandler([
            'host'        => 'smtp.gmail.com',
            'port'        => 587,
            'username'    => 'your@email.com',
            'password'    => 'secret',
            'smtp_secure' => 'tls',
            'use_smtp'    => true,
        ]);

        $mailer->set_from('from@email.com', 'Your Name');
        $mailer->set_reply_to('reply@email.com', 'Name');
        $mailer->add_to('john@doe.com');
        $mailer->set_subject('Flywork Mailer Test');
        $html = $this->view([
            'name' => 'Interart',
        ], 'Emails/mailer-test', true);
        $mailer->set_body($html);
        $mailer->send();

        if (empty($mailer->get_errors())) {
            echo 'Message sent successfully!';
            return;
        }

        var_dump($mailer->get_errors());
    }
}
