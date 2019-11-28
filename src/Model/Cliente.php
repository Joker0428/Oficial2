<?php

    namespace LOJA\Model;

class Cliente{
    private $id;
    private $nome;
    private $cpf;
    private $cep;
    private $endereco;
    private $telefone;
    private $email;
    private $senha;


    public function __construct(){
    
    }

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		if ($id===""){ 
			throw new \Exception('Id Inválido');
		}
		$this->id = $id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		if ($nome==="") throw new \Exception('Nome Inválido');

			$this->nome = $nome;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$cpf = "111.444.777-35";
		/*if(!preg_match("^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$", $cpf)) {
			echo "CPF inválido.";
		}*/
		if (!preg_match("^([0-9]){3}\.([0-9]){3}\.([0-9]){3}-([0-9]){2}$", $cpf) $cpf===""){ 
			throw new \Exception('Cpf Inválido');
		}
		$this->cpf = $cpf;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		if ($cep===""){ 
			throw new \Exception('Cep Inválido');
		}
		$this->cep = $cep;
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		if ($endereco===""){ 
			throw new \Exception('Endereco Inválido');
		}
		$this->endereco = $endereco;
	}

	public function getTelefone(){
		return $this->telefone;
	}

	public function setTelefone($telefone){
		if ($telefone===""){ 
			throw new \Exception('Telefone Inválido');
		}
		$this->telefone = $telefone;
	}

	

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$this->email = $email;
		}
		else {
			throw new \Exception("E-mail Inválido");
		}
	}

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senha){
		if ($senha===""){ 
			throw new \Exception('Senha Inválido');
		}
		$this->senha = $senha;
    }
}

?>
