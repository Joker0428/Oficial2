<?php
use PHPUnit\Framework\TestCase; 
use LOJA\Model\Usuario;
use LOJA\DAO\DAOUsuario;  
class DAOUsuarioTest extends TestCase{

    /**
     * @before
     */
    public function setUpDeleteAll(){
        $DAO = new DAOUsuario();
        $DAO->deleteAll();
    }

    public function testCadastro(){

        $c = new Usuario();
        $c ->setNome('Gabriel');
        $c->setSenha('244466666');
        

        $DAO = new DAOUsuario();
        $msg = $DAO->cadastrar($c);

        $this->assertEquals($msg, "CADASTROU O ADMIN COM SUCESSO");
    }
}
?>
       