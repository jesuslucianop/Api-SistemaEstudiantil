<?php
 namespace App\Traits;

 Use App\Estudiante_actualizar;
 use Illuminate\Support\Facades\DB;
 trait Estudiantetrait
 {
    public function InsertRow($r)
    {
        $Data2 = new Estudiante_actualizar;
        $Data2->matricula = $r->matricula;
        $Data2->cedula = $r->cedula;
        $Data2->nombres = $r->nombres;
        $Data2->apellidos = $r->apellidos;
        $Data2->estado_civil = $r->estado_civil;
        $Data2->nacionalidad = $r->nacionalidad;
        $Data2->Lugar_nacimiento = $r->Lugar_nacimiento;
        $Data2->ciudad = $r->ciudad;
        $Data2->direccion = $r->direccion;
        $Data2->Telefono_casa = $r->Telefono_casa;
        $Data2->Telefono_celular = $r->Telefono_celular;
        $Data2->quantity = $r->quantity;
        $Data2->save();
           //$Data = Paises::all();
        //  $Data2 = Estudiante_actualizar::create($r);

        if($Data2)
        {
            echo "Agregado correctamente";
        }

    }


 }
