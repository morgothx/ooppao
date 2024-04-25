<?php

require_once ("../views/EditView.php");

class Edit
{
    protected $editView;

    public function renderView()
    {
        $this-> editView = new EditView();
        return $this->editView->editInformation();
    }
}