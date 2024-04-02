<?php

class MainView
{
    private $form;

    function generarFormulario() {
        $this->form = '<form action="tu_script.php" method="post">
        <input type="submit" name="accion" value="Agregar">
        <input type="submit" name="accion" value="Leer">
        <input type="submit" name="accion" value="Borrar">
        <input type="submit" name="accion" value="Editar">
    </form>';

        return $this->form;
    }
}



