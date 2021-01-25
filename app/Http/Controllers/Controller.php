<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
      /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function auth(Request $request)
    {
        $correo= $request->input('correo');
        $clavelog = $request->input('clavelog');

        if($correo && $clavelog){

        $users = DB::select('select Nombre from auntentificacion where Contrasena="'.$clavelog.'" and Email="'.$correo. '"');
        if (count($users)<=0){return view('login', ['resultado'=>'No se pudo iniciar sesión']);}
        else{return redirect('/');} 
        }
        return view('login',['resultado'=>""]);
    }

    public function index()
    {
        return view('welcome', ['resultado'=>""]);
    }

    public function register(Request $request){
 
        $correo = $request->input('correo');
        $usuario = $request->input('usuario');
        $edad = $request->input('edad');
        $cel = $request->input('cel');
        $clave = $request->input('clave');
        $clave2 = $request->input('clave2');
        $msg="";

        if($correo && $usuario && $clave){
            DB::table('auntentificacion')->insert(
                ['Nombre' => $usuario ,
                'Email' => $correo ,
                'Contrasena' => $clave, 
                'Rol' => 'user',
                'Edad' => $edad,
                'Celular' => $cel,   ]
            );

        return redirect('/');

        }
          
        return view('register',['msg'=>$msg]);
    }
}
