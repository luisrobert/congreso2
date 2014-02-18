<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
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
 //           'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
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
            'Application\Controller\Organizacion' => 'Application\Controller\OrganizacionController'
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
