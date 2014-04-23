<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Application\Form\TestCaptchaForm;

class TestcaptchaController extends AbstractActionController
{
    public function formAction()
    {
        $captchaService = $this->getServiceLocator()->get('SanCaptcha');        
        $form = new TestCaptchaForm($captchaService);
        
        $request = $this->getRequest();  
        if ($request->isPost()) {
            //set data post  
            $form->setData($request->getPost());
             
            if ($form->isValid()) {
                echo "Captcha Valido ";
            } 
        }
         
        return array('form' => $form);
    }
}