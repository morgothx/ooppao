<?php

namespace Pao\controller;

use Pao\views\ReadView;

class Read
{
    protected $readView;

    public function renderView()
    {
        $this->readView = new ReadView();

        return $this->readView->generarFormulario();
    }
}
