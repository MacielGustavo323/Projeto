<?php 
error_reporting(0);
//php5
//Teórica - O.O
//Orientação e Objetos
//Abstração
//Pegar qlq mundo real -> Virtual

//Classes
	//Objetos
		//Atributos
			//Métodos (Ação)
			//Métodos de acesso
			//private, public protected
	//Herança
		//Uma classe herdar caracteristicas ou ação de uma superclasse.
	//Encapsulamento
		//getts and setts
//Classe pai ou superclasse
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
$v1 = new Vendedor();
	$v1->setNome("Artur");
	$v1->setEmail("Artur_nunes_@hotmail.com");
	$v1->setEndereco("Rua H");
	$v1->setSetor("Vendas");
	$v1->setSalario("3,500");
	$v1->setData_adm("04/08/2014");
	$v1->setCom("4%");
	var_dump($v1);
echo "<hr>";
$g1 = new Gerente();
	$g1->setNome("Artur");
	$g1->setEmail("Artur_nunes_@hotmail.com");
	$g1->setEndereco("Rua H");
	$g1->setIdfilial("3");
	$g1->setTvendas("200");
var_dump($g1);


//Criar objeto usuario
/*$usuarioUm = new Usuario("Artur", "tantofaz_@hotmail.com", "sei n");
$usuarioDois = new Usuario("Artur", "tantofaz_@hotmail.com", "sei n");
$usuarioUm = new Usuario();
$usuarioUm->nome = "Artur";
$usuarioUm->email = "artur_nunes_@hotmail.com";
$usuarioUm->endereco = "Rua nao sei";

$usuarioDois = new Usuario();
$usuarioDois->nome = "Nunes";
$usuarioDois->email = "Nunes_artur_hotmail@comtopon";
$usuarioDois->endereco = "sei não Rua";

var_dump($usuarioUm);

 echo "<br><b>Nome:</b> ".$usuarioUm->nome."<br>";
 echo "<b>E-mail:</b> ".$usuarioUm->email."<br>";
 echo "<b>Rua:</b> ".$usuarioUm->endereco."<br>";
 
 echo "<br><b>Nome:</b> ".$usuarioDois->nome."<br>";
 echo "<b>E-mail:</b> ".$usuarioDois->email."<br>";
 echo "<b>Rua:</b> ".$usuarioDois->endereco."<br>";
*/
 ?>