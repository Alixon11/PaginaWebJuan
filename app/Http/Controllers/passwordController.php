<?php

namespace App\Http\Controllers;

use Mail;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class passwordController extends BaseController
{
   
      /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function forgotpassword(Request $request)
    {
        $correo= $request->input('correo');
               
        if ($correo){
            {
                $expFormat = mktime(
                date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
                );
                $expDate = date("Y-m-d H:i:s",$expFormat);
                $key = md5($correo);
                $addKey = substr(md5(uniqid(rand(),1)),3,10);
                $key = $key . $addKey;
                DB::table('password_reset_temp')->insert(
                    ['token' => $key ,
                    'email' => $correo ,
                    'expDate' => $expDate,  ]
                );
                $data = array('name'=>$correo,'enlace'=>'localhost:8000/forgotpassword/'.$key); 
            Mail::send('mail', $data, function($message)  use($correo){
            $message->to($correo, 'recuperar contrasena')->subject
               ('Recuperar contraseña');
            $message->from('alisonfranco96@hotmail.com','Bhealth');});}
        } 
        return view('password',['resultado'=>""]);       
    }
    public function getpassword($token){
        $data=DB::select('select email from password_reset_temp where token="'.$token.'"');
        $email='';
        if (count($data)>0){
            $email=$data[0]->email;
        }
        else {
            return redirect('login');
        }
        return view('changepassword',['email'=>$email,'resultado'=>""]);

    }
    public function newpassword(Request $request){
        $correo= $request->input('correo');
        $clave= $request->input('newclave');
        $clave1= $request->input('newclave1');
        if ($correo && $clave && $clave1){
            DB::table('auntentificacion')->where('Email', $correo)->update(['Contrasena' => $clave]);
            DB::table('password_reset_temp')->where('email', $correo)->delete();
            return view('changepassword',['email'=>"",'resultado'=>'Clave cambiada correctamente']);
        }
        return view('login',['email'=>"",'resultado'=>'']);        
    }    
    public function payadmin(Request $request){
        $email = $request->input('correo');
        $idplan = $request->input('planuser');
        $planes = DB::select('select * from planes ');
       
       if($email && $idplan){
        $users = DB::select('select id from auntentificacion where Email ="'.$email. '"');
        $plan = DB::select('select valor, id from planes where id ="'.$idplan. '"');

            $resultado = DB::table('pagos')->insert(
                ['valor' =>$plan[0]->valor, 
                'fecha' => Carbon::now(),
                'id_usuario' => $users[0]->id,
                'plan'=> $plan[0]->id, ]
            );
            return view('admin', ['resultado'=>true,'planes'=>$planes]);
        }
        return view('admin', ['resultado'=>false,'planes'=>$planes]);

    }
}