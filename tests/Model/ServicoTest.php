<?php
    use PHPUnit\Framework\TestCase; // importar o PHPUnit
    use LOJA\Model\Servico; // LOJA foi configurado no JSON composer

    class ServicoTest extends TestCase
    {
        public function testClass()
        {
            $c = new Servico();
            $c->setNome('Gabriel');
            
            

            $this->assertEquals($c->getNome(), 'Gabriel');
            
            
        }
      
        public function testErrorNome()
        {
            $this->expectException(\Exception::class);
            $this->expectExceptionMessage('Nome Inválido');
            $c = new Servico();
            $c->setNome("");
        }
       
       
        
        
    }
?>