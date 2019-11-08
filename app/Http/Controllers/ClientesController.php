<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use App\Cliente;

class ClientesController extends Controller
{
    public function index(){
        if (session()->exists("user")){
            session()->regenerate();
            return view('cpanel.clientes');
        }
        return redirect()->route("login");
    }

    public function create(Request $request){
        if(session()->exists("user")){ 
            session()->regenerate();
            $json = json_decode($request->input("cliente"));
            
            $cliente = new Cliente;             
            $cliente->nome = $json->nome;
            $cliente->data_cad = $json->data_insc;
            $cliente->data_niver = $json->data_nasc;
            $cliente->cpf = $json->cpf; 
            $cliente->whatsapp = $json->celular;
            $cliente->tel_contato =  $json->fixo;
            $cliente->email_contato =  $json->email;
            $cliente->cep = $json->cep;
            $cliente->endereco = $json->logradouro;
            $cliente->numero =  $json->numero;
            $cliente->complemento = $json->complemento;
            $cliente->cidade =  $json->cidade ;
            $cliente->uf = $json->uf;
            $cliente->bairro = $json->bairro;
            $cliente->observacao = $json->observacao;
            $cliente->save();
            return response()->json(["result"=>"salvo com sucesso"],"200");
        }
        return redirect()->route("login");
    }

    public function seacher($cpf){
        if(session()->exists('user')){
            session()->regenerate();
            $cliente = new Cliente();
            if($cliente->validaCPF($cpf)):
                $cliente = DB::table("clientes")->select("*")->where([
                    "cpf","=",$cpf
                ])->first(); 
                return response()->json(["msg" => "Conectou"]);
            endif;
            return respose()->json(["msg" => "failure"]);
        }
        return redirect()->route('login');
    }

    public function update(){
        if (session()->exists("user")){
            session()->regenerate();
            return response()->json(["error" => "Nao configurado"],"400");
        }
        return redirect()->route("login");
    }

    public function delete(){
        if (session()->exists("user")){
            session()->regenerate();
            return response()->json(["error"=> "Nao configurado"], "400");
        }
        return redirect()->route("login");
    }
}
