<?php
/**
 * example
 *
 * @license http://opensource.org/licenses/MIT MIT
 */

class MazelabExample_DashboardController extends Zend_Controller_Action
{

    /**
     * use zend context switch for ajax requests
     */
    public function init() {
        $ajaxContext = $this->_helper->getHelper('AjaxContext');
        $ajaxContext->addActionContext('index', array('json', 'html'))
                    ->initContext();
    }
    
    /**
     * this is your index action
     */
    public function indexAction()
    {
        
    }

}

