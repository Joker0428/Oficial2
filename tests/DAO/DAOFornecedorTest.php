<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Fornecedor;
    use LOJA\DAO\DAOFornecedor;
    Class DAOFornecedorTests extends TestCase
    {
        /**
         * @before
         */
        /*public function setUpDeleteAll() {
            $DAO = new DAOFornecedor();
            $DAO->deleteAll();
        }*/
        public function testCadastro()
        {
            $c = new Fornecedor();
            // $c->setId();
            $c->setNome('Abolição');
            $c->setCidade('Rio de Janeiro');
            $c->setEstado('Rio de Janeiro');
            $c->setCnpj('123.123.123-33');

            $DAO = new DAOFornecedor();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastrado com sucesso");
        }
    }
?>