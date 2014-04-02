<?php

/**
 * @author C�sar Cancino
 * @copyright 2013
 */

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;

class Formularios extends Form {

    public function __construct($name = null) {
        parent::__construct($name);

        $this->add(array(
            'name' => 'cedula',
            'options' => array(
                'label' => 'Num.CI',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input form-control', // para la caja de texto 
                'required' => 'true', // para el camppo requerido
                'StringLength'=> 'false, array(10)'     // para el camppo requerido
            ),
        ));

        $this->add(array(
            'name' => 'nombre',
            'options' => array(
                'label' => 'Nombre',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input form-control', // para la caja de texto 
//                'required' => 'true', // para el camppo requerido
            ),
        ));

        $this->add(array(
            'name' => 'apellido',
            'options' => array(
                'label' => 'Apellido',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input form-control', // para la caja de texto 
                'required' => 'true', // para el camppo requerido
            ),
        ));

        
        $this->add(array(
            'name' => 'lugar',
            'options' => array(
                'label' => 'Lugar',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input form-control', // para la caja de texto 
//                'required' => 'true', // para el camppo requerido
            ),
        ));
        
        $this->add(array(
            'name' => 'telefono',
            'options' => array(
                'label' => 'Telefono-Cel.',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input form-control', // para la caja de texto 
//                'required' => 'true', // para el camppo requerido
            ),
        ));
        
         $this->add(array(
            'name' => 'email',
            'options' => array(
                'label' => 'email',
            ),
            'attributes' => array(
                'type' => 'email',
                'class' => 'input form-control', // para la caja de texto 
//                'required' => 'true', // para el camppo requerido
            ),
        ));
       

//      ----------------------------------------------------------------------
        $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar',
                'class'=>'btn btn-success'
            ),
        ));
    }

}

?>