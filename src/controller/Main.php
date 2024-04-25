<?php

namespace Pao\controller;

use Pao\views\MainView;

class Main
{
    protected $mainView;

    public function renderView()
    {
        $this->mainView = new MainView();
        return $this->mainView->generarFormulario();
    }
}
