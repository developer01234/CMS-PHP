<?php

namespace Cms\Controller;

class HomeController extends CmsController {

    public function index() {
        $this->view->render('index');
    }

    public function news($id) {
        echo $id;
    }

}
