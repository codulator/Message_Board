<?php

class Application_Form_Register extends Zend_Form {

    public function init() {
        /* Form Elements & Other Definitions Here ... */
        $this->setName('register');
        $this->setAction('/account/register');
        $this->setMethod('post');

/*        $this->addElement('text', 'usernameSignup', array (
            'label'      => 'Username:',
            'required'   => true,
            'filters'    => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
                )),
            ),
        ));*/

        // Add a email text element
        $this->addElement('text', 'email', array (
            'label'      => 'Email:',
            'required'   => true,
            'filters'    => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
                )),
            ),
        ));

        //Add a password element
        $this->addElement('password', 'password', array (
            'label'     => 'Password:',
            'required'  => true,
            'filters'   => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
                )),
            ),
        ));

        $this->addElement('password', 'passConfirm', array (
            'label'     => 'Confirm Password:',
            'required'  => true,
            'filters'   => array('StringTrim', 'StripTags'),
            'decorators' => array('ViewHelper', array ('Label', array (
                'requiredSuffix' => '<span class="asterik">*</span>',
                'escape' => false,
                )),
            ),
            'validator'  => array (

            ),
        ));

        //Add the submit button
        $this->addElement('submit', 'register', array (
            'label'   => 'Register',
            'ignore'  => true,
        ));
    }
}
