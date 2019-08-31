<?php

namespace Abrace\Model;

use \Abrace\DB\Sql;
use \Abrace\Model;

class Colaboradores extends Model {

	const SESSION = "colab";

	public static function login ($login, $password)
	{

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_colaboradores where login = :login",[
			":login"=>$login
		]);

		if (count($results) === 0 ){

			throw new \Exception("Senha errada ou usuário inexistente!");
		}

		$data = $results[0];

		if(password_verify($password, $data['senha']) === true){

			$colab = new Colaboradores();

			$colab->setData($data);

			$_SESSION[Colaboradores::SESSION] = $colab->getValues();

			return $colab;

		} else {

			throw new \Exception("Senha errada ou usuário inexistente!");
		}
	}

	public static function verifyLogin($staff = true)
	{

		if(
			!isset($_SESSION[Colaboradores::SESSION])
			||
			!($_SESSION[Colaboradores::SESSION])
			||
			!(int)$_SESSION[Colaboradores::SESSION]['idcolaborador'] > 0
			||
			(bool)$_SESSION[Colaboradores::SESSION]['staff'] !== true
		){
			header("Location: \login");
			exit;
		}
	}

	public static function logout()
	{
		$_SESSION[Colaboradores::SESSION] = null;
	}

	public static function getFromSession()
	{
		$colab = new Colaboradores();

		if (isset($_SESSION[Colaboradores::SESSION]) && (int)$_SESSION[Colaboradores::SESSION]['idcolaborador'] > 0){

			$colab->setData($_SESSION[Colaboradores::SESSION]);
		}

		return $colab;
	}
}

?>