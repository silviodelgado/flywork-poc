<?php

namespace App\Controllers;

use Interart\Flywork\Library\Mail\Handlers\PhpMailerHandler;

class Mail_test extends ApplicationController
{
    protected $need_auth = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $mailer = new PhpMailerHandler([
            'host'         => 'smtp.email.com',
            'port'         => 587,
            'username'     => 'your@email.com',
            'password'     => 'secret',
            'smtp_secure'  => 'tls',
            'use_smtp'     => true,
            'use_sendmail' => false,
        ]);

        $mailer->setDebug(true);
        $mailer->setFrom('you@email.com', 'Your Name');
        $mailer->setReplyTo('other@email.com', 'Name');
        $mailer->addTo('john@doe.com');
        $mailer->setSubject('Flywork Mailer Test');
        $html = $this->view([
            'name' => 'Interart',
        ], 'Emails/mailer-test', true);
        $mailer->setBody($html);
        $mailer->send();

        if (empty($mailer->getErrors())) {
            echo 'Message sent successfully!';
            return;
        }

        var_dump($mailer->getErrors());
    }
}
