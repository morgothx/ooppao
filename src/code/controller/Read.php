<?php

require_once ("../views/ReadView.php");

class Read
{
    protected $readView;

    public function renderView()
    {
        $this->readView = new ReadView();

        return $this->readView->generarFormulario();
    }
}
