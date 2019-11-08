<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    public $timestamps = false;
    
    public $table = "clientes";

    protected $senha = null;

    public function selectAll(){
        return DB::table("clientes")->get();
    }

    public function validaCPF($cpf) : Boolean{
        if($cpf):
            return true;
        else:
            return false;
        endif;

    }
}
