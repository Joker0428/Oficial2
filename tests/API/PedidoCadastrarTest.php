<?php
    use PHPUnit\Framework\TestCase;
    use LOJA\Model\Pedido;
    use LOJA\Model\Produto;
    use LOJA\Model\Servico;
    use LOJA\Model\Cliente;
    use LOJA\Model\Carrinho;
    use LOJA\Model\Item;
    use LOJA\DAO\DAOPedido;
    use LOJA\DAO\DAOProduto;
    use LOJA\DAO\DAOServico;
    use LOJA\DAO\DAOCliente;

    class DAOPedidoTest extends TestCase
    {
        public $servico; // dados do departamento
        public $cliente; // dados do cliente
        public $carrinho; // dados do carrinho
    // }

    /**
    * @before
    */
    public function setUpInit() {
        // cria um novo departamento
        $this->servico = new Servico();
        $this->servico->setNome('Eletronicos');

        // cadastra um novo servico para teste e atribui ao $servico
        $DAO = new DAOServico();
        $DAO->cadastrar($this->servico);
        $this->servico->setId($DAO->lastId);

        // cria um novo produto
        $this->produto = new Produto();
        $this->produto->setNome('Televisão');
        $this->produto->setPreco(2000);
        $this->produto->setDescricao('Samsung 4k');
        $this->produto->setImagem('imagem.jpg');
        $this->produto->setServico('Televisão');
        $this->produto->setServico($this->servico);
        $DAO = new DAOProduto();
        $result = $DAO->cadastrar($this->produto);
        $this->produto->setId($DAO->lastId);

        // Cria um novo cliente
        $this->cliente = new Cliente();
        $this->cliente->setNome('Eli 55');
        $this->cliente->setCpf('123.456.789-10');
        $this->cliente->setCep('21341-380');
        $this->cliente->setEndereco('rua 1');
        $this->cliente->setTelefone('(21)99212-0201');
        $this->cliente->setEmail('eliakin@email.com');
        $this->cliente->setSenha('123');
        $DAO3 = new DAOCliente();
        $result = $DAO3->cadastrar($this->cliente);
        $this->cliente->setId($DAO3->lastId);
        // cria um carrinho
        $this->carrinho = new Carrinho();
        $this->carrinho->addItem($this->produto->getId());
    }

    public function testCadastro() // testa o cadastro de cadastro
    {
        /*$obj = new Pedido();
        $obj->setData('2019-12-25');
        $obj->setFrete(20.00);
        $obj->setDias(5);
        $obj->setCliente($this->cliente);

        $DAO = new DAOPedido();
        $msg = $DAO->cadastrar($obj,$this->carrinho);*/
        
        $_SESSION['clienteid'] = $this->cliente->getId();
        $_SESSION['clientenome'] = $this->cliente->getNome();
        $_SESSION['carrinho'] = $this ->carrinho;

        $obj = new \LOJA\API\PedidoCadastrar;
        $this->assertEquals($msg,"Pedido efetuado com sucesso");
    }
}
?>