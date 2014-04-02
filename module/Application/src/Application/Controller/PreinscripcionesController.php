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
use Application\Form\Formularios;
class PreinscripcionesController extends AbstractActionController
{
    public function indexAction()
    {
           if ($this->getRequest()->isPost()) {

                       
            $objectManager = $this->getServiceLocator()
                          ->get('Doctrine\ORM\EntityManager');
            $data = $this->request->getPost();
            
            $participante = new \Application\Entity\Participante();
            $participante->setCedula($data['cedula']);
            $participante->setNombre($data['nombre']);
            $participante->setApellido($data['apellido']);
            $participante->setLugar($data['lugar']);
            $participante->setTelefono($data['telefono']);
            $participante->setEmail($data['email']);
            $objectManager->persist($participante);
            $objectManager->flush();

            //die(var_dump($user->getId())); // yes, I'm lazy
            echo var_dump($participante->getIdparticipante());
            return $this->redirect()->toUrl($this->getRequest()->getBaseUrl() . '/application/index/index');
        }
        else {
            //zona del formulario
            $form = new Formularios("form");
//            $id_proveedores = (int) $this->params()->fromRoute('id_proveedores', 0);
            $valores = array
                (
                "titulo" => "Registro de Participantes",
                "form" => $form,
                'url' => $this->getRequest()->getBaseUrl()
             //   'id_proveedores' => $id_proveedores
            );
            
        $view = new ViewModel($valores);
        $this->layout('layout/layout_insc');
        $this->layout()->saludo="Hola layout de home";
        $this->layout()->title="layout-insc";
        return $view;
        }
         
    }
    
}
