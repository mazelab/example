<?php
/**
 * example
 *
 * @license http://opensource.org/licenses/MIT MIT
 */

class MazelabExample_Bootstrap extends Zend_Application_Module_Bootstrap
{
    /**
     * init the acl of your module
     */
    protected function _initAcl()
    {
        $aclPath = __DIR__ . '/configs/acl.ini';

        if (file_exists($aclPath)) {
            // use own acl builder
            $acl = Zend_Registry::getInstance()->get('MazeLib_Acl_Builder');
            $acl->addConfig(new Zend_Config_Ini($aclPath));
        }
    }
    
    /**
     * init the navigation of your module
     * 
     * it adds these pages to the existing navigation
     */
    protected function _initNavigation()
    {
        $naviPath = __DIR__ . '/configs/navigation.ini';

        if (file_exists($naviPath)) {
            $bootstrap = $this->getApplication();
            $view = $bootstrap->bootstrap('layout')->getResource('view');

            $config = new Zend_Config_Ini($naviPath);
            $view->navigation()->addPages($config);
        }
    }

    /**
     * init the routes of your module
     */
    public function _initRouter()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();

        // if routes.ini exitsts then use it
        if (file_exists(__DIR__. '/configs/routes.ini')) {
            $routingFile = __DIR__. '/configs/routes.ini';
            $router->addConfig(new Zend_Config_Ini($routingFile, $this->getEnvironment()), 'routes');
        }
        
        return $router;
    }
}
