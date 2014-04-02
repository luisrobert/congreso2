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

class MisionvController extends AbstractActionController
{
    public function indexAction()
    {
//    $objectManager = $this->getServiceLocator()
//                          ->get('Doctrine\ORM\EntityManager');
//
//    $user = new \Application\Entity\User();
//    $user->setUsername('Luis5');
//    $user->setEmail('Luis5@hotmail.com');
//    $objectManager->persist($user);
//    $objectManager->flush();
//
//    //die(var_dump($user->getId())); // yes, I'm lazy
//        echo var_dump($user->getUser_id());
//        return new ViewModel();
        
         $view = new ViewModel();
        $this->layout('layout/layout_home');
        $this->layout()->saludo="Hola layout de home";
        $this->layout()->title="layout-home";
        return $view;
        
        
    }
    
    public function ponenciasAction()
    {
        return new ViewModel();
    }
}
