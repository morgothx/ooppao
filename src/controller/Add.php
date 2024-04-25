<?php

namespace Pao\controller;

use Pao\views\AddView;

class Add
{
    protected $addView;

    public function renderView()
    {
        $this->addView = new AddView();
        return $this->addView->generarFormulario();
    }
}
