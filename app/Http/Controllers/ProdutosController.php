<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        if (session()->exists("user")){
            return view("cpanel.produtos");
        }
        return redirect()->route("login");
    }

    public function create(Request $req){
        if(session()->exists("user")){
            if($req)
            return response()->json(["error"=>"nao configurado"],"400");
        }
        return redirect()->route("login");
    }

    public function update(){
        if (session()->exists("user")){
            return response()->json(["error"=>"nao configurado"], "400");
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
