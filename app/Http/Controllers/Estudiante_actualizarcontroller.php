<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits;
use App\Traits\Estudiantetrait;
class Estudiante_actualizarcontroller extends Controller
{
    use Estudiantetrait;
    public function insertardata(Request $r)
    {
        echo $this->InsertRow($r);
    }
}
