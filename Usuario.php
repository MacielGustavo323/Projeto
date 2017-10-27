<?php
 
    abstract class Usuario{
    //Em toda parte;
	private $nome;
	private $email;
	private $endereco;
	//metodo construtor
/*	function __construct($nome, $email, $endereco){
		$this-> nome = $nome; 
		$this-> email = $email; 
		$this-> endereco = $endereco; 
	}
   */
	function setNome($nome){
		$this-> nome = $nome;
	}
	function getNome($nome){
		return $this-> nome;
	}
	function setEmail($email){
		$this-> email = $email;
	}
	function getEmail($email){
		return $this-> email;
	}
	function setEndereco($endereco){
		$this-> endereco = $endereco;
	}
	function getEndereco($endereco){
		return $this-> endereco;
	}
}
        class Vendedor extends Usuario{
	private $setor;
	private $salario;
	private $data_adm;
	private $com;
/*
	function __construct($setor, $salario, $data_adm, $com){
		$this-> setor = $setor;
		$this-> salario = $salario;
		$this-> data_adm = $data_adm;
		$this-> com = $com;
	}*/

	function setSetor($setor){
		$this-> setor = $setor;
	}
	function getSetor($setor){
		return $this-> setor;
	}

	function setSalario($salario){
		$this-> salario = $salario;
	}
	function getSalario($salario){
		return $this-> salario;
	}

	function setData_adm($data_adm){
		$this-> data_adm = $data_adm;
	}
	function getData_adm($data_adm){
		return $this-> data_adm;
	}

	function setCom($com){
		$this-> com = $com;
	}
	function getCom($com){
		return $this-> com;
	}
}
class Gerente extends Usuario{
	private $Idfilial;
	private $Tvendas;

/*
	function __construct($Idfilial, $Tvendas){
		$this-> Idfilial = $Idfilial;
		$this-> Tvendas = $Tvendas;
	}*/

	function setIdfilial($Idfilial){
		$this-> Idfilial = $Idfilial;
	}
	function getIdfilial($Idfilial){
		return $this-> Idfilial;
	}

	function setTvendas($Tvendas){
		$this-> Tvendas = $Tvendas;
	}
	function getTvendas($Tvendas){
		return $this-> Tvendas;
	}
}

