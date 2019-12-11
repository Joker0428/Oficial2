<?php
namespace LOJA\DAO;
use LOJA\Model\Conexao;
use LOJA\Model\Servico;


class DAOServico{

    public $lastId;

    public function cadastrar(Servico $servico){
        $pdo = Conexao::getInstance();
        $pdo->beginTransaction();

        try{
             $con = $pdo->prepare(
              "INSERT INTO servico
                    VALUES (default, :nome)"
           );

        
        $con->bindValue(":nome", $servico->getNome());
        $con->execute();
        
        
        $this->lastId = $pdo->lastInsertId(); // Retorna o id do cliente cadastrado
        $pdo->commit(); // finaliza a transação
        return "Cadastrado com Sucesso";
        }
        catch(Exception $e) {
            $this->lastId = 0;
            $pdo->rollback();
            return "Erro ao Cadastrar";
        }
    }
     

    

    public function listaServico(){
        $sql = "SELECT * FROM servico";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();

        $lista = array();

        while($servico = $con->fetch(\PDO::FETCH_ASSOC)){
            $lista[] = $servico;
        }
        
        return $lista;
        
    }
    public function buscaPorId($id){

        $sql = "SELECT * FROM servico WHERE pk_servico = :id";
        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":id", $id);
        $con->execute();

        $servico = new Servico();

        $servico = $con->fetch(\PDO::FETCH_ASSOC);
        //print_r($cliente);//testa saida 
        return $servico;

    }
    public function deleteAll() {
        $sql = "delete from servico";
        $con =  Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído todos com sucesso";
    }
    public function deleteFromId($id) {
        $sql = "delete from servico where pk_servico = {$id}";
        $con = Conexao::getInstance()->prepare($sql);
        $con->execute();
        return "Excluído Todos com sucesso";
    }
}


?>
