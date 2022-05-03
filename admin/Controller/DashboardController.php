<?php

namespace Admin\Controller;

use Admin\Model\User\UserRepository;

class DashboardController extends AdminController {

    public function index() {
        $userModel = new UserRepository($this->di);
        
        print_r($userModel->getUsers());
        
        $this->view->render('dashboard');
    }

}
