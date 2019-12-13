<?php 
namespace LOJA\Model;
class Usuario{
    private $id;
    private $nome;
    private $senha;


    public function __construct(){
    
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        if($nome==="") throw new \Exception("Nome Inválido");
			$this->nome = $nome;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        if($senha==="") throw new \Exception("Senha Inválido");
        $this->senha = $senha;
    }
}
?>