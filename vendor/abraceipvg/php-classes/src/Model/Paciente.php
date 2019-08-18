<?php

namespace Abrace\Model;

use \Abrace\DB\Sql;
use \Abrace\Model;
use \Abrace\Mailer;

class Paciente extends Model {

	const ERROR = "UserError";
	const SUCCESS = "UserSuccess";

	public static function setError($msg)
	{

		$_SESSION[Paciente::ERROR] = $msg;
	}

	public static function getError()
	{

		$msg = (isset($_SESSION[Paciente::ERROR]) && $_SESSION[Paciente::ERROR]) ? $_SESSION[Paciente::ERROR] : "";

		Paciente::clearError();

		return $msg;
	}

	public static function clearError()
	{

		$_SESSION[Paciente::ERROR] = NULL;
	}

	public static function setSuccess($msg)
	{

		$_SESSION[Paciente::SUCCESS] = $msg;
	}

	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Paciente::SUCCESS]) && $_SESSION[Paciente::SUCCESS]) ? $_SESSION[Paciente::SUCCESS] : "";

		Paciente::clearSuccess();

		return $msg;
	}

	public static function clearSuccess()
	{

		$_SESSION[Paciente::SUCCESS] = NULL;
	}

	public function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_pacientes ORDER BY nome");
	}

	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_save_paciente_consultas(:nome, :endereco, :bairro, :cep, :cidade, :email, :tel, :cel, :consulta)", [
			":nome"=>utf8_decode($this->getnome()),
			":endereco"=>utf8_decode($this->getendereco()),
			":bairro"=>utf8_decode($this->getbairro()),
			":cep"=>$this->getcep(),
			":cidade"=>utf8_decode($this->getcidade()),
			":email"=>$this->getemail(),
			":tel"=>$this->gettel(),
			":cel"=>$this->getcel(),
			":consulta"=>$this->getopcoes()
		]);

		$this->setData($results);
	}

	public function update()
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_update_paciente(:idpaciente, :nome, :endereco, :bairro, :cep, :cidade, :email, :tel, :cel, :consulta)", [
			"idpaciente"=>$this->getidpaciente(),
			":nome"=>utf8_decode($this->getnome()),
			":endereco"=>utf8_decode($this->getendereco()),
			":bairro"=>utf8_decode($this->getbairro()),
			":cep"=>$this->getcep(),
			":cidade"=>utf8_decode($this->getcidade()),
			":email"=>$this->getemail(),
			":tel"=>$this->gettel(),
			":cel"=>$this->getcel(),
			":consulta"=>$this->getopcoes()
		]);

		$this->setData($results);
	}

	public function get($idpaciente)
	{
	 
		$sql = new Sql();
		 
		$results = $sql->select("SELECT * FROM tb_pacientes WHERE idpaciente = :idpaciente", array(
		":idpaciente"=>$idpaciente
		));
		 
		$this->setData($results[0]);
	 
	 }

	 public function getCheckbox($idpaciente)
	{
	 
		$sql = new Sql();

		$data = [];
		 
		$results = $sql->select("SELECT consulta FROM tb_consultas WHERE idpaciente = :idpaciente", array(
		":idpaciente"=>$idpaciente
		));

		foreach ($results as $valor) {

			foreach ($valor as $key => $value) {
				
				array_push($data, $value);
			}
		}

		$opcoes = [
			"clinico"=>in_array("1 ", $data) ? 1 : null,
			"dentista"=>in_array("2 ", $data) ? 2 : null,
			"psicologo"=>in_array("3 ", $data) ? 3 : null
		];
		 
		return $opcoes;
	 }

	 public function getConsultas($idpaciente)
	 {

	 	$sql = new Sql();

	 	$results = $sql->select("SELECT * FROM tb_consultas WHERE idpaciente = :idpaciente", [
	 		":idpaciente"=>$idpaciente
	 	]);

	 	return $results;
	 }

	public function delete()
	{

		$sql = new Sql();

		$sql->query("CALL sp_paciente_delete(:idpaciente)", [
			":idpaciente"=>$this->getidpaciente()
		]);
	}

	public static function getPage($page = 1, $itensPerPage = 10)
	{
		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_pacientes  
			ORDER BY nome
			LIMIT $start, $itensPerPage;
			");

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			"data"=>$results,
			"total"=>(int)$resultTotal[0]["nrtotal"],
			"pages"=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)
		];
	}

	public static function getPageSearch($search, $page = 1, $itensPerPage = 10)
	{
		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("
			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_pacientes
			WHERE nome LIKE :search
			ORDER BY nome
			LIMIT $start, $itensPerPage;
			", [
				':search'=>'%'.$search.'%'
			]);

		$resultTotal = $sql->select("SELECT FOUND_ROWS() AS nrtotal;");

		return [
			"data"=>$results,
			"total"=>(int)$resultTotal[0]["nrtotal"],
			"pages"=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)
		];
	}
}


?>