<?php

require_once ("../views/EraserView.php");

class Eraser
{
    protected $eraserview;

    public function renderView()
    {
        $this->eraserview = new EraserView();
        return $this->eraserview->eraserInformation();
    }
}