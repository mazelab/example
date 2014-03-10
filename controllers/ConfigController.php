<?php
/**
 * example
 *
 * @license http://opensource.org/licenses/MIT MIT
 */

class MazelabExample_ConfigController extends Zend_Controller_Action
{

    /**
     * use zend context switch for ajax requests
     */
    public function init() {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        $ajaxContext->addActionContext('mainconfig', array('json', 'html'))
                    ->addActionContext('clientconfig', array('json', 'html'))
                    ->addActionContext('nodeconfig', array('json', 'html'))
                    ->initContext();
    }
    
    /**
     * this is the action for the main config
     */
    public function mainconfigAction()
    {
        
    }

    /**
     * this is the action for the client config
     * 
     * This will be rendered in the client views in the admin area
     */
    public function clientconfigAction()
    {
        
    }
    
    /**
     * this is the action for the node config
     * 
     * This will be rendered in the node views in the admin area
     */
    public function nodeconfigAction()
    {
        
    }
    
}

