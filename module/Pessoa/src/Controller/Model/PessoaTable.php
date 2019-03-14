<?php

namespace Pessoa\Model;

use Zend\Db\TableGateway\TableGatewayInterface;

public class PessoaTable
{
    private $tableGateway;


    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function getAll()
    {
        return $this->tableGateway->select();
    }

    public function getPessoa($id)
    {
        $id = (int) $id;
        $rowset = $this->tableGateway->select(['id' = $id]);
        $row = $rowset->current();
    }
}
