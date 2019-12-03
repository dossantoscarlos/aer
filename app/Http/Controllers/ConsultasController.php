<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//modelos
use App\Cliente;
use App\Usuario;
use App\Venda;
use App\Encomenda;
use App\Historico;
use App\Contrato;
use App\Consulta;

class ConsultasController extends Controller
{
    public function index () {
        if(session()->exists("user"))
        {   
            $entidade = DB::table('consultas')->get();
            return view("cpanel.consulta", ["entidades" => $entidade]);
        }
    }

    public function show() {
        if(session()->exists('user')):
            return view('cpanel.tipo_consulta');
        endif;
        return redirect()->route('login');
    }

    public function save(Request $request)
    {
        if(!session()->exists('user')){
            return reponse()->route('login');
        }

        try {

            $validacao = $request->validate([ 
                'filtro' => 'required|max:100',
                'descricao' =>'required|max:100'
            ]);

            $consulta = new Consulta;
            
            $consulta->filtro = $request->input('filtro');
            $consulta->descricao = strtolower($request->input('descricao'));
            
            $consulta->save();

            return response()->json([
                'content' => 'Salvo com sucesso !!!'
            ]);

        }catch(Exception $err){
           return response()->json($err);
        }
        
    }

    public function consulta (Request $request) {
        if (session()->exists("user")):
            try{
                $request->validate(array(
                    'entidades' => 'required|numeric',
                ));

                $consulta = new Consulta;
                $buscar = $request->input("buscar",'todos');
                $codigo = $request->input('entidades');
                      
                $entidade = $consulta->find($codigo); 

                if($buscar == "todos" ):
                    $resultado = DB::table($entidade->descricao);
                else:
                	$resultado = DB::table($entidade->descricao)->where("$entidade->filtro", '=', $buscar);
                endif;
                $tabela = "components.table_".substr($entidade->descricao, 0, -1);
                $entidade = DB::table('consultas')->get();
                return view('cpanel.consulta',[
                    'entidades'=> $entidade,
                    'validarTabela' => $resultado->count(),
                    'tabela' => $tabela, 
                    'resultado' => $resultado->get(),
                ]);
            }
            catch( Exception $err){
                return response()->json($err);
            }
        endif;
        return redirect()->route("login");
    }



}
