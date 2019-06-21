<?php

namespace Code\Controller;

use Code\View\View;

class ContatosController  
{
    public function index(){
        $view = new View('site/contatos.phtml');
        return $view->render();
    }
}
