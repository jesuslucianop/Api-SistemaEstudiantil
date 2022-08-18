<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\JsonResponse;
use App\Rules\PasswordValidation;
use App\Rules\PhoneNumberValidation;
use App\Rules\IDValidation;
use Illuminate\Http\Request;
use Config;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
   /**
    * Get a JWT via given credentials.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function login(request $request)
   {
    $credentials = request(['nombre_usuario', 'clave']);
    $Matricula_Recibida=$request->nombre_usuario;
    $Password = md5($request->clave);
    $token = JWTAuth::attempt($credentials);
    /*
       $credentials = request(['nombre_usuario', 'clave']);
       $credentials['clave']=md5(  $credentials['clave']);

       try {

        if ( !$token = JWTAuth::attempt($credentials) ) {
            //return $this->error('invalid-credentials', 401);
        }

    } catch (JWTException $e) {
        // something went wrong whilst attempting to encode the token
        //return $this->error('could-not-create-token', 500);
    }
*/
return response()->json($token);
    //return response()->json(compact('token'));

   }

   /**
    * Get the authenticated User.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function me()
   {
       return response()->json(auth()->user());
   }

   /**
    * Log the user out (Invalidate the token).
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function logout()
   {
       auth()->logout();

       return response()->json(['message' => 'Successfully logged out']);
   }

   /**
    * Refresh a token.
    *
    * @return \Illuminate\Http\JsonResponse
    */
   public function refresh()
   {
       return $this->respondWithToken(auth()->refresh());
   }

   /**
    * Get the token array structure.
    *
    * @param  string $token
    *
    * @return \Illuminate\Http\JsonResponse
    */
   protected function respondWithToken($token)
   {
       return response()->json([
           'access_token' => $token,
           'token_type' => 'bearer',
           'expires_in' => auth()->factory()->getTTL() * 60
       ]);
   }
}
