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
            $c = new Cliente();
            // $c->setId();
            $c->setNome('Eliakin');
            $c->setCpf('123.456.789-10');
            $c->setCep('12.345-678');
            $c->setEndereco('Rua dos bobos');
            $c->setTelefone('(21)1231-2132');
            $c->setEmail('eliakin@email.com');
            $c->setSenha('12345');

            $DAO = new DAOCliente();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastrado com sucesso");
        }
    }
?>