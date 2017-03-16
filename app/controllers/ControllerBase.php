<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller {

    protected function initialize() {
        $this->view->title = 'Test project';
        $this->view->user = $this->session->auth;
    }

}
