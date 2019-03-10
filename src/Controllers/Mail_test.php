<?php

namespace App\Controllers;

use Interart\Flywork\Library\Mail\Adapters\PhpMailerAdapter;

class Mail_test extends ApplicationController
{
    protected $need_auth = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $mailer = new PhpMailerAdapter([
            'host'         => $this->mailer_settings['smtp']['host'] ?? '',
            'port'         => $this->mailer_settings['smtp']['port'] ?? 25,
            'username'     => $this->mailer_settings['smtp']['user'] ?? '',
            'password'     => $this->mailer_settings['smtp']['pass'] ?? '',
            'smtp_secure'  => $this->mailer_settings['smtp']['secure'] ?? '',
            'use_smtp'     => $this->mailer_settings['smtp']['use_smtp'] ?? false,
            'use_sendmail' => $this->mailer_settings['use_sendmail'] ?? false,
        ]);

        $mailer->setDebug(true);
        $mailer->setFrom($this->mailer_settings['from']['email'], $this->mailer_settings['from']['name']);
        $mailer->setReplyTo($this->mailer_settings['reply']['email'], $this->mailer_settings['reply']['name']);

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
