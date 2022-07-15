<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;

class IndexController extends Action {

    public function index() {

        //instancia de conexão
        $conn = Connection::getDb();

        //instÂncia de modelo
        $produto = new Produto($conn);

        $produtos = $produto->getProdutos();

        $this->view->dados = $produtos;

        $this->render('index', 'layout1');

    }

    public function sobreNos() {
        $this->render('sobreNos', 'layout1');
    }

};


?>