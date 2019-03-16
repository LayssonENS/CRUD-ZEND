<?php

namespace Pessoa;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Pessoa\Model\PessoaTable;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\Feature\EventFeature\TableGatewayEvent;

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
                    return new PessoaTable($tableGateway);
                },
                Model\PessoaTableGateway::class => function($container){
                    $dbAdapter = $container->(AdapterInterface::class);
                    $resultSerPrototype = new ResultSet();
                    $resultSerPrototype->setArrayObjectPrototype(new Model\Pessoa());
                    return new TableGateway('pessoa', $dbAdapter,null,$resultSerPrototype);
                },
            ]
        ];
    }
}