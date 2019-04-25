<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Makidi;

use Zend\ServiceManager\Factory\InvokableFactory;
use Zend\Router\Http\Segment;

return [
//    'controllers' => [
//        'factories' =>[
//            Controller\MakidiController :: class => InvokableFactory :: class,
//        ],
//    ],
    
    'router' => [
        'routes' => [
           'makidi' => [
               'type' => Segment::class,
               'options' => [
                   'route' => '/makidi[/:action[/:id]]',
                   'constrains' => [
                       'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                       'id'     => '[0-9]+',
                    ],
                   'defaults' => [
                       'controller' => Controller\MakidiController::class,
                       'action' => 'index',
                   ],
               ],
           ],
        ],
    ],
    
    'view_manager' => [
        'template_path_stack' => [
          'makidi' => _DIR_ . '/../view',  
        ],
    ],
];
