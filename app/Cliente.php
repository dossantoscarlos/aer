<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    
    public  $table = "clientes";

    public function validaCamposCliente($objCliente) : Object {
        
        return $objCliente;
    } 

    public function validaCPF($cpf) : Boolean{
        if($cpf):
            return true;
        else:
            return false;
        endif;

    }
}
