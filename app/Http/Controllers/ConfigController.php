<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use DOMDocument;
use App\Usuario;
use App\util\BcryptCustom;

class ConfigController extends Controller
{
   	public function show(){
		if(session()->exists("user")):
			return redirect()->route("dashboard");
   		endif;
   		return view('config');
   	}

   public function create(Request $request)
   {
	   
   	DB::table('usuarios')->insert([
   		'nome' => $request->input('usuario'),
   		'senha' => \Hash::make($request->input('password')),
   		'nivel'=> $request->input('nivel'),
   	]);

	return response()->json(['code'=> 204,'msg'=>'sucesso']);

   }
}
