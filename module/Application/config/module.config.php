<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
        'san_captcha' => array(
        'class' => 'image',
        'options' => array(
            // using tmp sys dir to generate Captcha images
            'imgDir' => sys_get_temp_dir(),
            // feel free to add fonts in Module's font directory
            'fontDir' => __DIR__.'/../fonts',
            // if 'font' is not defined, SanCaptcha Module, will pick one randmoly in 'fontDir'
//          'font' => 'arial.ttf',
//          'font' => ['arial.ttf', 'Roboto-Regular.ttf'],
            'width' => 200,
            'height' => 50,
            'dotNoiseLevel' => 40,
            'lineNoiseLevel' => 2
        ),
    ),

    
'doctrine' => array(
  'driver' => array(
    'application_entities' => array(
      'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
      'cache' => 'array',
      'paths' => array(__DIR__ . '/../src/Application/Entity')
    ),

    'orm_default' => array(
      'drivers' => array(
        'Application\Entity' => 'application_entities'
      )
))), 
    'router' => array(
        'routes' => array(
            
            
            'SanCaptcha' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/testcaptcha',
                    'defaults' => array(
                        'controller'    => 'Application\Controller\Testcaptcha',
                        'action'        => 'form',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                
                    'captcha_form' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    => '/[:action[/]]',
                             'constraints' => array(
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                                'action' => 'form',                     
                            ),
                        ),
                    ),
                    
                    'captcha_form_generate' => array(
                        'type'    => 'segment',
                        'options' => array(
                            'route'    =>  '/captcha/[:id]',
                            'defaults' => array(
                                'controller' => 'Application\Controller\Captcha',
                                'action' => 'generate',                    
                            ),
                        ),
                    ),
                ),
            ),            
            
            //ruta para home
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
                ),
                
               'ponencias' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/ponencias',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Ponencias',
                        'action' => 'index'
                    ),
                ),
            ),
        
               'disertantes' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/disertantes',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Disertantes',
                        'action' => 'index'
                    ),
                ),
            ),

               'calendario' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/calendario',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Calendario',
                        'action' => 'index'
                    ),
                ),
            ),

               'costos' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/costos',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Costos',
                        'action' => 'index'
                    ),
                ),
            ),
            
           'organizacion' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/organizacion',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Organizacion',
                        'action' => 'index'
                    ),
                ),
            ),

           'inscripciones' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/inscripciones',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Inscripciones',
                        'action' => 'index'
                    ),
                ),
            ),

            'preinscripciones' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/preinscripciones',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Preinscripciones',
                        'action' => 'index'
                    ),
                ),
            ),
            
            'ver' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/ver',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Ver',
                        'action' => 'index'
                    ),
                ),
            ),
            
            'quienes' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/quienes',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Quienes',
                        'action' => 'index'
                    ),
                ),
            ),
            
            
            'misionv' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/misionv',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Misionv',
                        'action' => 'index'
                    ),
                ),
            ),

            'objetivos' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/objetivos',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Objetivos',
                        'action' => 'index'
                    ),
                ),
            ),

            'organiza' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/organiza',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Organiza',
                        'action' => 'index'
                    ),
                ),
            ),

            'cuando' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/cuando',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Cuando',
                        'action' => 'index'
                    ),
                ),
            ),

            'noticias' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/noticias',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Noticias',
                        'action' => 'index'
                    ),
                ),
            ),

            'lugarev' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/lugarev',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Lugarev',
                        'action' => 'index'
                    ),
                ),
            ),
            'contactos' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/contactos',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Contactos',
                        'action' => 'index'
                    ),
                ),
            ),
            'hospedaje' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/hospedaje',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Hospedaje',
                        'action' => 'index'
                    ),
                ),
            ),
            'sitiosi' => array(
                'type' => 'literal',
                'options' => array(
                    'route' => '/sitiosi',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Sitiosi',
                        'action' => 'index'
                    ),
                ),
            ),
            
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
         ),
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        
    ),
    
    'navigation' => array(
     'default' => array(
         array(
             'label' => 'Ponencias',
             'route' => 'ponencias',
         ),
         array(
             'label' => 'Disertantes',
             'route' => 'disertantes',
         ),
         array(
             'label' => 'Calendario',
             'route' => 'calendario',
         ),
         array(
             'label' => 'Costos',
             'route' => 'costos',
         ),
         array(
             'label' => 'Organizacion',
             'route' => 'organizacion',
         ),
         
         array(
             'label' => 'Inscripciones',
             'route' => 'inscripciones',
         ),
     ),
 ),
    
    
    
    'translator' => array(
        
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Ponencias' => 'Application\Controller\PonenciasController',
            'Application\Controller\Disertantes' => 'Application\Controller\DisertantesController',
            'Application\Controller\Calendario' => 'Application\Controller\CalendarioController',
            'Application\Controller\Costos' => 'Application\Controller\CostosController',
            'Application\Controller\Organizacion' => 'Application\Controller\OrganizacionController',
            'Application\Controller\Inscripciones' => 'Application\Controller\InscripcionesController',
            'Application\Controller\Preinscripciones' => 'Application\Controller\PreinscripcionesController',
            'Application\Controller\Ver' => 'Application\Controller\VerController',
            'Application\Controller\Quienes' => 'Application\Controller\QuienesController',
            'Application\Controller\Misionv' => 'Application\Controller\MisionvController',
            'Application\Controller\Objetivos' => 'Application\Controller\ObjetivosController',
            'Application\Controller\Organiza' => 'Application\Controller\OrganizaController',
            'Application\Controller\Cuando' => 'Application\Controller\CuandoController',
            'Application\Controller\Noticias' => 'Application\Controller\NoticiasController',
            'Application\Controller\Lugarev' => 'Application\Controller\LugarevController',
            'Application\Controller\Contactos' => 'Application\Controller\ContactosController',
            'Application\Controller\Hospedaje' => 'Application\Controller\HospedajeController',
            'Application\Controller\Sitiosi' => 'Application\Controller\SitiosiController',
            'Application\Controller\Captcha' => 'Application\Controller\CaptchaController',
            'Application\Controller\Testcaptcha' => 'Application\Controller\TestcaptchaController'

            ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/layout_home'           => __DIR__ . '/../view/layout/layout_home.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
