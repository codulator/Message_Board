<?php

class Application_Form_Login extends Zend_Form {

    public function init() {
        /* Form Elements & Other Definitions Here ... */
        $this->setName('login');

        $this->setMethod('post');

        $this->setAction('account/login');

        // Add a username element
        $this->addElement('text', 'username', array (
            'label'      => 'Username:',
            'required'   => true,
            'filters'    => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
                )),
            ),
        ));

        //Add a password element
        $this->addElement('password', 'passwordLogin', array (
            'label'      => 'Password:',
            'required'   => true,
            'filters'    => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
		)),
            ),
        ));

        //Add the submit button
        $this->addElement('submit', 'submit', array (
            'label'   => 'Login',
            'ignore'  => true,
        ));
    }
}
