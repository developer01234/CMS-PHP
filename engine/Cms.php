<?php

namespace Engine;

use Engine\Helper\Common;

class Cms {

    /**
     * @var DI
     */
    private $di;
    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di) {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     * Run Cms.
     */
    public function run() {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('user', '/user', 'UserController:index');
        $routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
        //print_r($this->di);
        print_r($routerDispatch);
    }

}
