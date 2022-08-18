<?php
 namespace App\Traits;
 Use App\Paises;
 trait Paistrait
 {
     public function Getallcountry()
     {
        //$Data = Paises::all();
       $Data2 = Paises::where('descripcion_iso', '!=', '....')
                      ->where('descripcion_iso', '!=', 'INDE')
                      ->where('descripcion_iso', '!=', '.')
                      ->get();
       if(empty($Data2))
       {
        return "No se encuentran paises disponibles";

       }
       return json_encode($Data2);
    }

 }
