<?php

namespace Pessoa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Model\PessoaTable;

class PessoaController extends AbstractActionController
{
    private $table;

    public function __contruct()
    {
        $this->table = new PessoaTable();
    }
    public function indexAction()
    {

        return new ViewModel(['pessoa' => $this->table->getAll()]);
    }

    public function adicionarAction()
    {
        return new ViewModel();
    }

    public function editarAction()
    {
        return new ViewModel();
    }

    public function salvarAction()
    {
        return new ViewModel();
    }

    public function confirmacaoAction()
    {
        return new ViewModel();
    }

    /**
     * /pessoa -> index
     * /pessoa/adicionar -> adcionarAction
     * /pessoa/salvar ->salvarAction
     * /pessoa/editar/1 ->editarAction
     * /pessoa/remover/1 ->removerAction
     * /pessoa/conformacao ->confirmacaoAction
     */
}
