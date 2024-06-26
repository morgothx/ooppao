<?php

namespace Pao\controller;

use Pao\controller\Add;
use Pao\controller\Edit;
use Pao\controller\Eraser;
use Pao\controller\Read;

class Router
{
    protected $add;
    protected $read;
    protected $eraser;
    protected $edit;

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
                $this->eraser = new Eraser();
                echo $this->eraser->renderView();
                break;
            case 'Editar':
                $this->edit = new Edit();
                echo $this->edit->renderView();
                break;
            default:
                echo "Accion no reconocida";
                break;
        }
    }
}


