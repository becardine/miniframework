<?php

namespace App\Controllers;

//resources do miniframework
use MF\Controller\Action;
use MF\Model\Container;

//models
use App\Models\Info;
use App\Models\Produto;

class IndexController extends Action
{

    public function index()
    {

        $produto = Container::getModel('Produto');

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');
    }

    public function sobreNos()
    {

        $info = Container::getModel('Info');

        $infos = $info->getInfo();

        $this->view->dados = $infos;

        $this->render('sobreNos', 'layout1');
    }
};
