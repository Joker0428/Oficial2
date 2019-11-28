<?php
    use PHPUnit\Framework\TestCase; // importar o PHPUnit
    use LOJA\Model\Cliente; // LOJA foi configurado no JSON composer

    class ClienteTest extends TestCase
    {
        public function testClass()
        {
            $c = new Cliente();
            $c->setNome('Eli');
            $c->setTelefone('(21)1231-2132');
            $c->setEmail('daniel@email.com');
            $c->setCpf('123.456.789-10');

            $this->assertEquals($c->getNome(), 'Eli');
            $this->assertEquals($c->getTelefone(), '(21)1231-2132');
            $this->assertEquals($c->getEmail(), 'daniel@email.com');
            $this->assertEquals($c->getCpf(), '123.456.789-10');
        }
        public function testErrorEmail()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('E-mail Inválido');
            $c = new Cliente();
            $c->setEmail('danielemail.com');
        }
        public function testErrorNome()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');
            $c = new Cliente();
            $c->setNome("");
        }
        public function testErrorCpf()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Cpf Inválido');
            $c = new Cliente();
            $c->setCpf("");
            $c->setCpf("111.444.777-35");
        }
        public function testErrorCep()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Cep Inválido');
            $c = new Cliente();
            $c->setCep("");
        }
        public function testErrorId()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Id Inválido');
            $c = new Cliente();
            $c->setId("");
        }
        public function testErrorEndereco()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Endereco Inválido');
            $c = new Cliente();
            $c->setEndereco("");
        }
        public function testErrorTelefone()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Telefone Inválido');
            $c = new Cliente();
            $c->setTelefone("");
        }
        public function testErrorSenha()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Senha Inválido');
            $c = new Cliente();
            $c->setSenha("");
        }
    }
?>