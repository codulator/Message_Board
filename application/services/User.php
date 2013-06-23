<?php

class Application_Service_User {
    
    /**
     * @desc users Zend Table
     *
     * @vars UserTable
     */
    protected $users;

    function __construct () {
       
        $this->users = new Application_Model_DbTable_User();
    }

    public function testUser() {
        $params = array (
            'name' => 'jinesh',
            'password' => 'helloworld',
            'email'    => 'jinesh86@gmail.com',
            'created'  => '2013-01-12 00:01:01',
            'salt'     => 'sfkahsfhshdkfhksad',
        );

        $this->users->insert($params);
    }
}

?>
