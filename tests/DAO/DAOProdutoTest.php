<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Produto;
    use LOJA\DAO\DAOProduto;
    Class DAOProdutoTests extends TestCase
    {
        /**
         * @before
         */
        /*public function setUpDeleteAll() {
            $DAO = new DAOProduto();
            $DAO->deleteAll();
        }*/
        public function testCadastro()
        {
            $c = new Produto();
            // $c->setId();
            $c->setNome('Oleo');
            $c->setPreco('R$500');
            $c->setDescricao('para motor');
            $c->setImagem('123.123.123-33');
            $c->setServico('troca de oleo');

            $DAO = new DAOProduto();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastrado com sucesso");
        }
    }
?>