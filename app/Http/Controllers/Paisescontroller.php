<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Paistrait;

class Paisescontroller extends Controller
{
use Paistrait;
public function Getall()
{
    return $this->Getallcountry();
}

}
