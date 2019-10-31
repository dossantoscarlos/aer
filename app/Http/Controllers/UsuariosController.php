<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UsuariosController extends Controller
{   
    public function index(){
        if (session()->exists("user")){
            return view("CPanel.Usuarios");
        }
        return redirect()->route("login");
    }

    public function create(Request $request){
        if(session()->exists("user")){
            
            $validator = Validator::make($request->all(),[
               'user.usuario' => ["required"],
               'user.password'=> ['required'],
               'user.nivel'   => ['required']
            ]);
            
            if ($validator->fails()):
                return response()->json($validator);
            endif;                
            
            $db = DB::table('usuarios')->select('nome')->where([
                ['nome','=', $request->input('user.usuario')]
            ])->count();
            
            if ($db == 0 ):
                DB::table('usuarios')->insert([
                    'nome' => $request->input('user.usuario'),
                    'senha' => \Hash::make($request->input('user.password')),
                    'nivel'=> $request->input('user.nivel'),
                ]);
                return response()->json(['msg'=>'Usuario cadastrado', "code" => 204]); 
            endif;
            return response()->json(["msg"=>"Usuario já existente" ,"code"=>302]);
        }
        return redirect()->route("login");
    }

    public function update(){
        if (session()->exists("user")){
            return response()->json(["error"=>"nao configurado"], "302");
        }
        return redirect()->route("login");
    }

    public function delete(){
        if(session()->exists("user")){
            return response()->json(["error" => "nao configurado"], "400");
        }
        return redirect()->route("login");
    }

}
