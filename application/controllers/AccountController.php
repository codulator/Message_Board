<?php
class AccountController extends Zend_Controller_Action {
    public function init() {
        /* Initialize action controller here */
    }

    public function loginAction() {

    }

    public function registerAction() {
       //inistialize registration form object
        $request = $this->getRequest();
        $regForm = new Application_Form_Register();
        $this->view->form = $regForm;

        if ($request->isPost()) {
            $formData = $request->getPost();
            if ($regForm->isValid($formData)) {
                $user   = new Application_Model_User($regForm->getValues());
                $mapper = new Application_Model_UserMapper();
                $mapper->save($user);

                $this->_helper->redirector('account');
            } else {
                //$regForm->populate($formData);
            }
        }
    }
}
?>
