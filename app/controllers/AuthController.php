<?php

use Phalcon\Mvc\Model\Message;

class AuthController extends ControllerBase {

    private function _registerSession($user) {
        $this->session->set(
                "auth", 
                [
                    "id" => $user->getId(),
                    "name" => $user->name,
                ]
        );
    }

    public function signinAction() {
        $this->view->title = 'Sign In';
        if ($this->request->isPost()) {
            $user = Users::findFirst(
                            [
                                [
                                    "name" => $this->request->getPost("name"),
                                    "password" => md5($this->request->getPost("password")),
                                ]
                            ]
            );

            if ($user) {
                $this->_registerSession($user);
                $this->response->redirect('/');
            } else {
                $this->view->messages = [new Message('Incorrect name or password')];
            }
        }
    }

    public function signoutAction() {
        $this->session->remove('auth');
        $this->response->redirect('/');
    }

    public function signupAction() {
        $this->view->title = 'Sign Up';
        if ($this->request->isPost()) {
            $user = new Users();
            $user->name = $this->request->getPost('name');
            $user->password = md5($this->request->getPost('password'));
            if ($user->save()) {
                $this->_registerSession($user);
                $this->response->redirect('/');
            } else {
                $this->view->messages = $user->getMessages();
            }
        }
    }

}
