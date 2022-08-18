<?php
 namespace App\Traits;
 Use App\Usuarios;
 Use App\Estudiantes;
 use Illuminate\Support\Facades\DB;
 trait Logintrait
 {
    public function Login($mt,$pw)
    {
        $Matricula_Recibida=$mt;
        $Password = md5($pw);
        $users = DB::table('Estudiante')
            ->join('Usuario', 'Estudiante.IDusuario', '=', 'Usuario.IDusuario')
            //->join('orders', 'users.id', '=', 'orders.user_id')
            ->where('Estudiante.matricula', '=', $Matricula_Recibida)
            ->where('Usuario.clave', '=', $Password)
            ->select('Estudiante.*', 'Usuario.*')
            ->get();

           //$Data = Paises::all();
          /*$Data2 = Usuarios::where('matricula', '=', $m)
                       //  ->where('password', '', 'INDE')
                         ->get();*/
          if(empty($users))
          {
           return "No se encuentran paises disponibles";

          }
          return json_encode($users);
       }


 }
