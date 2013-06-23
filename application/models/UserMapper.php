<?php
/**
 * Mapper class to map user model to Application_Model_DBTable_User 
 * @Version 0.0
 * @Author  Jinesh Lalan
 * Date :   05/04/13 
 */

class Application_Model_UserMapper {

    /**
     * Zend DB Table Object
     *
     * @var Zend_Db_Table_Abstract
     */
    protected $_dbTable;

    public function setDbTable ($dbTable) {

        if (is_string ($dbTable)) {
            $dbTable = new $dbTable();
        }

        if (!$dbTable instanceof Zend_Db_Table_Abstract) {
            throw new Exception ('Invalid Table Gateway provided');
        }

        $this->_dbTable = $dbTable;
        return $this;
    }

    public function getDbTable () {
        if (null === $this->_dbTable) {
            $this->setDbTable('Application_Model_DbTable_User');
        }
        return $this->_dbTable;
    }

    /**
     * Save the User Registration data to database  
     * 
     * @param  Application_Model_User 
     */
    public function save(Application_Model_User $user) {

        $data = array (
            'email'    => $user->getEmail(),
            'password' => $user->getPassword(),
            //'salt'     => $user->getSalt(),
            'salt'     => 'lasjdfkjassaklfa',
            'created'  => date("Y-m-d H:i:s"),
        );

        if (null === ($id= $user->getId())) {
            unset($data['id']);
            $this->getDbTable()->insert($data);
        } else {
            $this->getDbTable()->update($data, array('id = ?' => $id));
        }
    }
}
