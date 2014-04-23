<?php

/**
 * @author C�sar Cancino
 * @copyright 2013
 */

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Form\Element\Captcha;
use Zend\Form\Factory;

class Formularios extends Form {

    public function __construct(CaptchaAdapter $captchaAdapter = null) {
        parent::__construct('Formulario Preinscripcion');
        $this->setAttribute('method', 'post');

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
       

     //radio button   
//         $this->add(array(
//            'name' => 'estado',
//            'options' => array(
//                'label' => 'Profesion/Ocupacion?',
//                'values'=>array('E'=>'Estudiante','P'=>'Profesional'),
//            ),
//            'attributes' => array(
//                'type' => 'radio',
//                'class' => 'form-control', // para la caja de texto 
////                'required' => 'true', // para el camppo requerido
//            ),
//        ));
//
        $this->add(array(
        'type' => 'Zend\Form\Element\Radio',
        'name' => 'estado',
        'options' => array(
            'label' => 'Profesion/Ocupacion?',
            'value_options' => array(
                '0' => 'Estudiante',
                '1' => 'Profesional',
            ),
            ),
        'attributes' => array(
                'class' => 'form-control', 
               
        ),
    ));
         
//         $radio = new Element\Radio('estado');
//     $radio->setLabel('Profesion/Ocupacion ?');
//
//     $radio->setValueOptions(
//                array('E'=>'Estudiante','P'=>'Profesional'));
//     $this->add($radio);

     //select
//     
//     $select = new Element\Select('paquete');
//     $select->setLabel('Que paquete te intereza?');
//     $select->setAttribute('multiple', true);
//    // $select->setEmptyOption('seleccione...');
//     $select->setValueOptions(array(
//             '0' => '1 dia',
//             '1' => '2 dias',
//             '2' => 'Todo el evento',
//            ));
//     $this->add($select);
//         
        $this->add(array(
             'type' => 'Zend\Form\Element\Select',
             'name' => 'paquete',
             'options' => array(
                     'label' => 'Que paquete te intereza?',
                     'value_options' => array(
                             '0' => '1 dia',
                             '1' => '2 dias',
                             '2' => 'Todo el evento',
                     ),
             ),
            'attributes' => array(
                'class' => 'form-control', 
            ),    

     ));
     

//     $this->add(array(
//     'type' => 'Zend\Form\Element\Captcha',
//     'name' => 'captcha',
//     'options' => array(
//         'label' => 'Codigo captcha',
//         'captcha' => new Captcha($captchaAdapter),
//     ),
//     'attributes'=>array(
//         'class'=>'form-control',
//         
//     )
// ));
     
        $captcha = new Captcha('captcha');
        $captcha->setCaptcha($captchaAdapter);
        $captcha->setOptions(array('label' => 'Codigo Captcha.'));
        $this->add($captcha);
      
     
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
        
            $this->add(array(
            'name' => 'buscar',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'buscar',
                'title' => 'Buscar',
                'class'=>'btn btn-success'
            ),
        ));
    }

}

?>