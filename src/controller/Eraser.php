<?php

namespace Pao\controller;

use Pao\views\EraserView;

class Eraser
{
    protected $eraserview;

    public function renderView()
    {
        $this->eraserview = new EraserView();
        return $this->eraserview->eraserInformation();
    }
}