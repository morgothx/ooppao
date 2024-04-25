<?php

require_once ("../views/MainView.php");

class Main
{
    protected $mainView;

    public function renderView()
    {
        $this->mainView = new MainView();
        return $this->mainView->generarFormulario();
    }
}
