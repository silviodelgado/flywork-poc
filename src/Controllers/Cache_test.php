<?php

namespace App\Controllers;

use Interart\Flywork\Library\Cache;


class Cache_test extends ApplicationController
{
    protected $fruits = [
        'banana',
        'apple',
        'orange',
        'avocado',
    ];

    public function __construct()
    {
        $this->need_auth = false;

        parent::__construct();

    }

    public function index()
    {
        $cache = new Cache();
        
        echo '$this->fruits';
        var_dump($this->fruits);
        
        $cache->save('fruits', $this->fruits);
        
        sort($this->fruits);
        
        $fruits = $cache->get('fruits');
        
        echo '<hr>';
        echo '$this->fruits sorted';
        var_dump($this->fruits);
        echo '<hr>';
        echo '$fruits';
        var_dump($fruits);
        
        echo '<p><a href="/cache-test/get">Get</a></p>';
    }
    
    public function get()
    {
        $cache = new Cache();
                
        var_dump($cache->get('fruits'));
        
        echo '<p><a href="/cache-test/remove">Remove</a></p>';
    }
    
    public function remove()
    {
        $cache = new Cache();

        $cache->remove('fruits');

        echo '<p><a href="/cache-test">Add Cache</a></p>';
    }
}