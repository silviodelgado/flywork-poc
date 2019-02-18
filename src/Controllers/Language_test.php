<?php

namespace App\Controllers;

use Interart\Flywork\Library\Language;


class Language_test extends ApplicationController
{
    private $lang;
    private $language = 'pt-br';

    public function __construct()
    {
        $this->need_auth = false;
        parent::__construct();

        $this->lang = new Language('common', $this->language);
    }

    public function index()
    {
        echo $this->lang->get('test');
    }

    public function english()
    {
        $this->language = 'en-us';
        $this->lang = new Language('common', $this->language);

        echo $this->lang->get('test');
    }

    public function portuguese()
    {
        $this->language = 'pt-br';
        $this->lang = new Language('common', $this->language);

        echo $this->lang->get('test');
    }
}