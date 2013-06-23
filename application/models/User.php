<?php
class Application_Model_User {

    /**
     * Email address used for reigtration
     */
    protected $_email;

    /**
     * DateTime user registered
     */
    protected $_created;

    /**
     * Password created during registration
     */
    protected $_password;

    /**
     * Row ID for user
     */
    protected $_id;

    /**
     * Class contructor
     * @param array
     */
    public function __construct(array $options) {
        if (is_array($options)) {
            $this->setOptions($options);
        }
    }

    /**
     * Loop through options array to set user properties
     * @param array
     */
    public function setOptions(array $options) {
        $methods = get_class_methods ($this);
        foreach ($options as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }
        return $this;
    }

    public function setEmail($email) {
        $this->_email = $email;
        return $this;
    }

    public function getEmail() {
        return $this->_email;
    }
   
    public function setPassword($password) {
        $this->_password = $password;
        return $this;
    }

    public function getPassword() {
        return $this->_password;
    }

    public function getId() {
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }
}

?>
