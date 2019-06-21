<?php

namespace Code\Controller;

use Code\View\View;
use Code\Entity\Products;

class PageController  
{
    public function index(){
        $pdo = new \PDO(
            'mysql:host=localhost;dbname=formacao_php',
            'anderson',
            'budega'
        );
        $view = new View('site/index.phtml');
        $view->products = (new Products($pdo))->findAll();
        return $view->render();
    }
}
