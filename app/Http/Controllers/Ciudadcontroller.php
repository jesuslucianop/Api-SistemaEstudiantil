<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits;
use App\Traits\Ciudadestrait;
class Ciudadcontroller extends Controller
{
    use Ciudadestrait;

    public function getall()
    {
        return $this->Getallcity();
    }
}
