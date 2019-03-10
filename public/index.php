<?php

/**
 * Flywork
 *
 * Lightweight PHP MVC framework
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2019 Silvio Delgado
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 * and associated documentation files (the "Software"), to deal in the Software without restriction,
 * including without limitation the rights to use, copy, modify, merge, publish, distribute,
 * sublicense, and/or sell copies of the Software, and to permit persons to whom the Software
 * is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or
 * substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE
 * AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
 * DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 *
 * @package    Flywork
 * @author     Silvio Delgado
 * @copyright  Copyright (c) 2019, Silvio Delgado (https://silviodelgado.net/)
 * @license    https://opensource.org/licenses/MIT MIT License
 */

// Basic application settings

$app_settings = [
    'database'        => [
        'default' => [
            'database_type' => 'mysql',
            'database_name' => 'flywork',
            'server'        => 'localhost',
            'username'      => 'root',
            'password'      => '',
            'charset'       => 'utf-8',
        ],
    ],
    'database_entry'  => 'default',
    'default_route'   => [
        'controller' => 'Home',
        'action'     => 'index',
    ],
    'custom_routes'   => [
        'test/variation' => 'home/other-test',
    ],
    'mailer_settings' => [
        'smtp'         => [
            'host'     => 'smtp.email.com',
            'port'     => 25,
            'user'     => 'you@email.com',
            'pass'     => 'secret',
            'secure'   => true,
            'use_smtp' => true,
        ],
        'use_sendmail' => true,
        'from'         => [
            'email' => 'from@email.com',
            'name'  => 'Your Name',
        ],
        'reply'        => [
            'email' => 'reply@email.com',
            'name'  => 'Organization',
        ],
    ],
];
date_default_timezone_set('America/Sao_Paulo');
define('ENV', 'dev');

// Do not edit code below

define('ROOTPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR);
define('WRITEPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'writable' . DIRECTORY_SEPARATOR);
define('WEBPATH', __DIR__ . DIRECTORY_SEPARATOR);
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Interart\Flywork\Kernel;

switch (ENV) {
    case 'prod':
        ini_set('display_errors', '0');
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
        break;
    case 'dev':
        ini_set('display_errors', '1');
        error_reporting(E_ALL);
        break;
    default:
        Interart\Flywork\Kernel::error503();
}

try
{
    $kernel = new Kernel($app_settings);
    unset($app_settings);
    $kernel->run();
} catch (BadMethodCallException $ex) {
    //echo 'BadMethodCallException';
    if (ENV == 'dev') {
        var_dump($ex);
    }
    Kernel::error404();
} catch (Exception $ex) {
    //echo 'Exception';
    if (ENV == 'dev') {
        var_dump($ex);
    }
    Kernel::error500();
} catch (\Throwable $ex) {
    //echo 'Throwable';
    if (ENV == 'dev') {
        var_dump($ex);
    }
    Kernel::error404();
}
