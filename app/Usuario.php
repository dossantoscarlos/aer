<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Usuario extends Model
{
	 public $nome;
	 public $nivel;
	 public $_token;

	 function getNome(): String {
	 	return $this->nome;
	 }   

	 function getNivel(): int {
	 	return $this->nivel;
	 }   

	 function get_token(): String {
	 	return $this->_token;
	 } 

	 function setNome($nome): Usuario {
	 	$this->nome= $nome;
	 	return $this;
	 }

	function setNivel($nivel): Usuario {
	 	$this->nivel = $nivel;
	 	return $this;
	 }
	
	function set_token($_token): Usuario {
	 	$this->_token = $_token;
	 	return $this;
	 }

	public function selectAll()
	{
		return DB::table('Usuarios')->select('nome','nivel')->get();
	}
}
