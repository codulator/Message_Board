<?php

class IndexController extends Zend_Controller_Action
{

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        // initialize login form object
        $loginForm = new Application_Form_Login();
        $this->view->loginForm = $loginForm;

        // initialize signup form object
        $registerForm = new Application_Form_Register();
        $this->view->signupForm = $registerForm;
    }


}

