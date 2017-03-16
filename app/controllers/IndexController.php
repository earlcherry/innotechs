<?php

class IndexController extends ControllerBase {

    public function indexAction() {
        if ($this->session->auth)
            $this->view->users = Users::find();
    }

}
