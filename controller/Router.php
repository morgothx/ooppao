<?php

require_once ("Add.php");
require_once ("Read.php");

class Router
{
    protected $add;
    protected $read;

    public function response()
    {
        $accion = $_POST['accion'];

        switch ($accion) {
            case 'Agregar':
                $this->add = new Add();
                echo $this->add->renderView();
                break;
            case 'Leer':
                $this->read = new Read();
                echo $this->read->renderView();
                break;
            case 'Borrar':
                echo "Borrar";
                break;
            case 'Editar':
                echo "Editar";
                break;
            default:
                echo "Accion no reconocida";
                break;
        }
    }
}


