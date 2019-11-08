<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//modelos
use App\Cliente;
use App\Usuario;
use App\Venda;
use App\Encomenda;
use App\Historico;
use App\Contrato;

class ConsultasController extends Controller
{
    public function index () {
        if(session()->exists("user"))
        {   
        
            return view("cpanel.consulta");
        }
    }

    public function entendies (){
        $entidades = [ "content" => [
            ["code"=> 0, "descricao" => "Clientes"], 
            ["code"=> 1, "descricao" => "Produtos"],
            ["code"=> 2, "descricao" => "Usuarios"], 
            ["code"=> 3, "descricao" => "Vendas"],
            ["code"=> 4, "descricao" => "Encomendas"],
            ["code"=> 5, "descricao" => "Historicos"],
            ["code"=> 6, "descricao" => "Contratos"]
            ]
        ];
        return response()->json($entidades);
    }

    private function options($vclass) {
        switch ($vclass) {
            case '0':
                return new Cliente;    
                break;
            case '1': 
                return new Produto;
                break;
            case '2': 
                return new Usuario;
                break; 
            case '3': 
                return new Vendas;
                break;
            case '4':
                return new Encomenda;
                break;
            case '5':
                return new Historico;
                break;
            case '6':
                return new Contratos;
                break;
            
        }
    }

    public function consulta (Request $request) {
        if (session()->exists("user")):
            $class = $this->options($request->input("entidade"));
            if ($class == null){
                return response()->json([
                    "content" => "Erro ao encontrar tabela contacte ao webmaster"
                ]);
            }

            $buscar = $request->input("busca",'todos');
            if($buscar == "todos" ):
                $resultado = $class->selectAll();
            endif;
            
            return response()->json(["content" => $resultado]);
        endif;
        return redirect()->route("login");
    }



}
