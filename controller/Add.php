<?php

require_once ("../views/AddView.php");

class Add
{
    protected $addView;

    public function renderView()
    {
        $this->addView = new AddView();
        return $this->addView->generarFormulario();
    }
}
