<?php

namespace App\Http\Controllers;
use App\Traits;
use App\Traits\Logintrait;
use Illuminate\Http\Request;

class Logincontroller extends Controller
{
    use Logintrait;
   public function Userlogin(Request $r)
   {
        return $this->Login($r->matricula,$r->clave);
   }
}

