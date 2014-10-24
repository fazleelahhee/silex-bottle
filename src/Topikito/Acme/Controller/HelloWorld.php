<?php

namespace Topikito\Acme\Controller;

use app\Core;
//use Topikito\Acme\Plugin\AuthUser;
use Topikito\Acme\Sal;
use Silex\Application;

/**
 * Class HelloWorld
 *
 * @package Topikito\Acme\Controller
 */
class HelloWorld extends Core\BaseController
{

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->initView([
                'pageTitle' => 'Acme.',
                'pageDescription' => 'Acme foo bar baz.',
            ]);
    }

    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view->render('Hello-world/index.html.twig');
    }

}
