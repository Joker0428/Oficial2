<?php
    use PHPUnit\Framework\TestCase; // importar o PHPUnit
    use LOJA\Model\Usuario; // LOJA foi configurado no JSON composer

    class UsuarioTest extends TestCase
    {
        public function testClass()
        {
            $c = new Usuario();
            $c->setNome('Gabriel');
            $c->setSenha('123456');
            

            $this->assertEquals($c->getNome(), 'Gabriel');
            $this->assertEquals($c->getSenha(), '123456');
            
        }
      
        public function testErrorNome()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');
            $c = new Usuario();
            $c->setNome("");
        }
       
       
        
        public function testErrorSenha()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Senha Inválido');
            $c = new Usuario();
            $c->setSenha("");
        }
    }
?>