<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Cliente;
    use LOJA\DAO\DAOCliente;
    Class DAOClienteTests extends TestCase
    {
        /**
         * @before
         */
        public function setUpDeleteAll() {
            $DAO = new DAOCliente();
            $DAO->deleteAll();
        }
        public function testCadastro()
        {
            // dados
            $c = new Cliente();
            // $c->setId();
            $c->setNome('Eliakin');
            $c->setCpf('123.456.789-10');
            $c->setCep('23030-460');
            $c->setEndereco('Rua dos bobos');
            $c->setTelefone('(21)1231-2132');
            $c->setEmail('eliakin@email.com');
            $c->setSenha('12345');
            //execução
            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($c);
            // testa resultados
            $this->assertEquals($msg, "Cadastrado com Sucesso");
            // remove os dados gerados
            $DAO->deleteFromId($DAO->lastId);
        }
    }
?>