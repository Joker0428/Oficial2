<?php
    use PHPUnit\Framework\TestCase; // importar o PHPUnit
    use LOJA\Model\Fornecedor; // LOJA foi configurado no JSON composer

    class FornecedorTest extends TestCase
    {
        public function testClass()
        {
            $c = new Fornecedor();
            $c->setNome('Eli');
            $c->setCidade('(21)1231-2132');
            $c->setEstado('daniel@email.com');
            $c->setCnpj('123.456.789-10');

            $this->assertEquals($c->getNome(), 'Eli');
            $this->assertEquals($c->getCidade(), '(21)1231-2132');
            $this->assertEquals($c->getEstado(), 'daniel@email.com');
            $this->assertEquals($c->getCnpj(), '123.456.789-10');
        }
        public function testErrorNome()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');
            $c = new Fornecedor();
            $c->setNome("");
        }
        public function testErrorCnpj()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Cnpj Inválido');
            $c = new Fornecedor();
            $c->setCnpj("");
            $c->setCnpj("111.444.777-35");
        }
        public function testErrorEstado()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Estado Inválido');
            $c = new Fornecedor();
            $c->setEstado("");
        }
        public function testErrorId()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Id Inválido');
            $c = new Fornecedor();
            $c->setId("");
        }
        public function testErrorCidade()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Cidade Inválido');
            $c = new Fornecedor();
            $c->setCidade("");
        }
    }
?>