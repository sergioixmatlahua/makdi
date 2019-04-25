<?php

namespace Makidi;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Module implements ConfigProviderInterface {

    public function getConfig() {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    public function gerServiceConfig() {
        return [
            'factories' => [
                Model\MakidiTable::class => function($container) {
                    $tableGateway = $container->get(Model\MakidiTableGateway::class);
                    return new Model\MakidiTable($tableGateway);
                },
                Model\MakidiTableGateway::class => function ($container) {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Makidi());
                    return new TableGateway('makidi', $dbAdapter, null, $resultSetPrototype);
                },
            ],
        ];
    }

    public function getControllerConfig() {
        return [
            'factories' => [
                Controller\MakidiController::class => function($container) {
                    return new Controller\MakidiController(
                            $container->get(Model\MakidiTable::class)
                    );
                },
            ],
        ];
    }

}
