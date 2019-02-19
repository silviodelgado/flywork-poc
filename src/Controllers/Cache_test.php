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
    protected $cache;

    public function __construct()
    {
        $this->need_auth = false;

        parent::__construct();

        $this->cache = new Cache();
    }

    public function index()
    {
        echo '$this->fruits';
        var_dump($this->fruits);
        
        $this->cache->save('fruits', $this->fruits);
        
        sort($this->fruits);
        
        $fruits = $this->cache->get('fruits');
        
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
        var_dump($this->cache->has('fruits'));

        echo '<hr>';
                
        var_dump($this->cache->get('fruits'));
        
        echo '<p><a href="/cache-test/remove">Remove</a></p>';
    }
    
    public function remove()
    {
        $this->cache->remove('fruits');

        echo '<p><a href="/cache-test">Add Cache</a></p>';
    }
}