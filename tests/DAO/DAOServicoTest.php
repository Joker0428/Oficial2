<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Servico;
    use LOJA\DAO\DAOServico;
    Class DAOServicoTests extends TestCase
    {
        /**
         * @before
         */
        public function setUpDeleteAll() {
            $DAO = new DAOServico();
            $DAO->deleteAll();
        }
        public function testCadastro()
        {
            $c = new Servico();
            // $c->setId();
            $c->setNome('Caio');

            $DAO = new DAOServico();
            $msg = $DAO->cadastrar($c);
            $this->assertEquals($msg, "Cadastro o Serviço com Sucesso");
        }
    }
?>