<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class SitiosiController extends AbstractActionController
{
    public function indexAction()
    {       
        $view = new ViewModel();
        $this->layout('layout/layout_org');
        $this->layout()->saludo="Hola layout de home";
        $this->layout()->title="layout-home";
        return $view;
        
        
    }
    
    public function ponenciasAction()
    {
        return new ViewModel();
    }
}
