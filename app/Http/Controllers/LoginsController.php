<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Usuario;
use App\util\BcryptCustom;

class LoginsController extends Controller
{
    public function show(){
        if(session()->exists('user')){
            session()->regenerate();
            return redirect()->route('dashboard');
        }
        $users = DB::table('usuarios')->count();

        return view('cpanel.login',['users' => $users]);
    }

    public function auth(Request $request)
    {
        $db = DB::table('usuarios')->select('nome','nivel','senha')->where([
            ['nome','=', $request->input('usuario')]
        ]);

        if ($db->count() == 0 ):
            return response()->json(["msg" => " Usuario inexistente " ]); 
        endif;
        $db = $db->first();
        if (\Hash::check($request->input('password'), $db->senha)):
                $user = new Usuario();
                $user->setNome($db->nome);
                $user->setNivel($db->nivel);
                $user->set_token($request->input('_token'));

                session(['user'=> $user]);
                dump(session);
                die();
                return redirect()->route('dashboard');
        else:
            return redirect()->route('login')->with('status','senha invalida');
        endif;
        return redirect()->route('login')->with('status',"error ao logar");
    }


    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect()->route('login');
    }
}
