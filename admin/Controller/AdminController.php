<?php

namespace Admin\Controller;

use Engine\Controller;
use Engine\Core\Auth\Auth;

class AdminController extends Controller {

    /**
     * @var Auth
     */
    protected $auth;

    /**
     * AdminController constructor.
     * @param \Engine\DI\DI $di
     */
    public function __construct($di) {
        parent::__construct($di);

        $this->auth = new Auth();

        if (!$this->auth->authorized and $this->request->server['REQUEST_URI'] !== '/admin/login/') {
            // redirect
            header('Location: /admin/login/', true, 301);
            exit;
        }
    }

}
