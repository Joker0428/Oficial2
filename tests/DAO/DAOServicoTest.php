<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Servico;
    use LOJA\DAO\DAOServico;

    Class DAOCServicoTests extends TestCase
    {public $lastId;
        /**
         * @before
         */
        public function setUpDeleteAll() {
            $DAO = new DAOServico();
            $DAO->deleteAll();
        }
        public function testCadastro()
        {
            // dados
            $c = new Servico();
            // $c->setId();
            $c->setNome('Olho');
            
            //execução
            $DAO = new DAOServico();
            $msg = $DAO->cadastrar($c);
            // testa resultados
            $this->assertEquals($msg, "Cadastrado com Sucesso");
            // remove os dados gerados
            $DAO->deleteFromId($DAO->lastId);
        }
    }
?>