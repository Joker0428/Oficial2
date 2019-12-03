<?php
    use PHPUnit\Framework\TestCase; // importar o PHPUnit
    use LOJA\Model\Produto; // LOJA foi configurado no JSON composer

    class ProdutoTest extends TestCase
    {
        public function testClass()
        {
            $c = new Produto();
            $c->setNome('Oleo');
            $c->setPreco('R$500');
            $c->setDescricao('para motor');
            $c->setImagem('123.456.789-10');
            $c->setServico('troca de oleo');

            $this->assertEquals($c->getNome(), 'Eli');
            $this->assertEquals($c->getPreco(), 'R$500');
            $this->assertEquals($c->getDescricao(), 'para motor');
            $this->assertEquals($c->getImagem(), '123.456.789-10');
            $this->assertEquals($c->getServico(), 'troca de oleo');
        }
        public function testErrorNome()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');
            $c = new Produto();
            $c->setNome("");
        }
        public function testErrorPreco()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Preço Inválido');
            $c = new Produto();
            $c->setPreco("");
            $c->setPreco("R$500");
        }
        public function testErrorDescricao()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Descrição Inválido');
            $c = new Produto();
            $c->setDescricao("");
        }
        public function testErrorId()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Id Inválido');
            $c = new Produto();
            $c->setId("");
        }
        public function testErrorServico()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Servico Inválido');
            $c = new Produto();
            $c->setServico("");
        }
    }
?>