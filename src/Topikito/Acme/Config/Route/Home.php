<?php

namespace Topikito\Acme\Config\Route;

use app\config\Bridge\Router;
use Silex\Application;
use \Topikito\Acme\Controller;

/**
 * Class Home
 *
 * @package Topikito\Acme\Config\Route
 */
class Home extends Router
{

    public function load()
    {
        $this->_app->match('/hello-world', function () {
                $controller = new Controller\HelloWorld($this->_app);
                return $controller->index();
            });
    }

}
