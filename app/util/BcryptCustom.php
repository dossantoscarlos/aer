<?php

namespace App\util;

class BcryptCustom {

	private $salt = "Cf2f98eMArKYBJomM0F6aJ";

	private $custo = "08";

	public function cryptHash($senha) : String
	{
		return crypt($senha, '$2a$' . $this->custo . '$' . $this->salt . '$');
	}

	public static function verificaHash($hash, $senha) : bool
	{
		return (crypt($senha,$hash)) ? true : false;
	}
}
