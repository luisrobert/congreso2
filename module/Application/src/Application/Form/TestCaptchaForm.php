<?php

namespace Application\Form;

use Zend\Form\Form;
use Zend\Form\Element\Captcha;
use Zend\Captcha\AdapterInterface as CaptchaAdapter;
    
class TestCaptchaForm extends Form
{
    public function __construct(CaptchaAdapter $captchaAdapter = null)
    {
        parent::__construct('Test Form Captcha');
        $this->setAttribute('method', 'post');
        
        $captcha = new Captcha('captcha');
        $captcha->setCaptcha($captchaAdapter);
        $captcha->setOptions(array('label' => 'Verificar si es humano.'));
        $this->add($captcha);
        
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'verificar',
                'title' => 'Verificar',
                'class'=>'btn btn-success'
            ),
        )); 
    }
    
}