<?php
/**
 * @Author  Jinesh Lalan
 * @Version 0.0
 * @date    12/22/2012 
 */

class Zend_View_Helper_JavascriptHelper extends Zend_View_Helper_Abstract {
    
    function javascriptHelper () {
        // Get the request object
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $fileURI = 'media/js/' . $request->getControllerName() . '/' . $request->getActionName(). '.js';

        if (file_exists ($fileURI)) {
            $this->view->headScript()->appendFile('/' . $fileURI);
        }
    }
}
?>
