<?php

namespace Pessoa\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PessoaController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
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
