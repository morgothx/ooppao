<?php

namespace Pao\controller;

use Pao\views\EditView;

class Edit
{
    protected $editView;

    public function renderView()
    {
        $this->editView = new EditView();
        return $this->editView->editInformation();
    }
}