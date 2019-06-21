<?php

namespace Code\Controller;

use Code\View\View;
use Code\Entity\Products;
use Code\DB\Conn;

class ProdutoController
{
    public function index($id){
        $pdo = Conn::getInstancia();
        
        $view = new View('site/index.phtml');
        $view->products = (new Products($pdo))->find($id);
        return $view->render();
    }

}
