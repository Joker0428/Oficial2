<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Produto;
    use LOJA\DAO\DAOProduto;

    class DAOProdutoTests extends TestCase
    {
        public $servico; //dados do departamento
        /**
         * @before
         */
        public function setUpInit(){
            //cria um novo departamento
            $this->servico =new Servico();
            $this->servico->setNome('Eletrônicos');
            //cadastra um novo departamento para teste
            $DAO = new DAOServico();
            $DAO->cadastrar($this->servico);
            $this->servico->setId($DAO->lastId);
        }
    
         public function testCadastro() // testa o cadastro de produtos
         {
             //definindo produto para teste
             $produto = new Produto();
             $produto->setNome('Televisão');
             $produto->setPreco(2000);
             $produto->setDescricao('Samsung 4k');
             $produto->setImagem('imagem.jpg');
             //definindo o departamento para o produto
             $produto->setDepartamento($this->departamento);
             //executando cadastro
             $DAO = new DAOproduto();
             $result = $DAO->cadastrar($produto);
             //verificando se o cadastro foi efetuado com sucesso
             $this->assertEquals($result, "Cadastrado com sucesso");
             //deletando a categoria e o cliente 
             $DAO->deleteFromId($DAO->lastId);
             $DAO = new DAODepartamento();
             $DAO->deleteFromId($this->departamento->getId());
         }
        
    
    }
?>