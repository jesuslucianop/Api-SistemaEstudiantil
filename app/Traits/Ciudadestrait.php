<?php
 namespace App\Traits;

 Use App\Ciudades;
 use Illuminate\Support\Facades\DB;
 trait Ciudadestrait
 {
    public function Getallcity()
    {

           //$Data = Paises::all();
          $Data2 = Ciudades::all();

          if(empty($Data2))
          {
           return "No se encuentran paises disponibles";

          }
          return json_encode($Data2);

    }


 }
