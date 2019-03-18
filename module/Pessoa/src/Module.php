<?php

namespace Pessoa;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Pessoa\Model\PessoaTable;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\Feature\EventFeature\TableGatewayEvent;
use Pessoa\Controller\PessoaController;

class Module implements ConfigProviderInterface {

    public function getConfig()
    {
        return include __DIR__."/../config/module.config.php";
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\PessoaTable::class => function($container){
                    $tableGateway = $container->get(Model\PessoaTableGateway::class);
                    return new Model\PessoaTable($tableGateway);
                    var_dump($tableGateway);
                    die;
                },
                Model\PessoaTableGateway::class => function($container){
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\Pessoa());
                    return new TableGateway('pessoa', $dbAdapter,null,$resultSetPrototype);
                },
            ]
        ];
    }
    public function getControllerConfig(){
        return [
            'factores' =>[
                PessoaController::class => function($container){
                    $tableGateway = $container->get(Model\PessoaTable::class);
                    return new PessoaController($tableGateway);
                }

            ]
        ];
    }
}