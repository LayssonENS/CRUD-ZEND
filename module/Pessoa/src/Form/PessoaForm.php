<?php
namespace Pessoa\Form;

use Zend\Form\Form;
use Zend\Form\Element;
use Zend\Captcha;


/**
 * Description of PessoaForm
 *
 * @author drink
 */
class PessoaForm extends Form
{

    public function __construct()
    {
        parent::__construct('pessoa', []);

        $this->add(new \Zend\Form\Element\Hidden('id'));
        $this->add(new \Zend\Form\Element\Text("nome", ['label' => "Nome"]));
        $this->add(new \Zend\Form\Element\Text("sobrenome", ['label' => "Sobrenome"]));
        $this->add(new \Zend\Form\Element\Email("email", ['label' => "Email"]));
        $this->add(new \Zend\Form\Element\Select('estado', ['label' => "Estado", 'value_options' => [
            'ES' => 'ES',
            'SP' => 'SP',
            'MG' => 'MG',
            'RJ' => 'RJ',
            'SC' => 'SC',
            'OT' => 'OT',
        ]]));
        $this->add(new \Zend\Form\Element\Select('situacao', ['label' => "Situação", 'value_options' => [
            'Ativo' => 'Ativo',
            'Inativo' => 'Inativo',
        ]]));

        $submit = new \Zend\Form\Element\Submit('submit');
        $submit->setAttributes(['value' => 'Salvar', 'id' => 'submitbutton']);
        $this->add($submit);
    }
}
