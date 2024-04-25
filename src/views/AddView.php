<?php

namespace Pao\views;

class AddView
{
    private $form;

    public function generarFormulario()
    {
        $this->form = '<form action="index.php" method="post">
        <label for="marca">
            Marca
        </label>
        <input type="text" name="marca" value="">
        <label for="color">
            Color
        </label>
        <input type="text" name="color" value="">
        <input type="submit" name="accion" value="Add">
    </form>';

        return $this->form;
    }
}
