<?php
    namespace LOJA\API;

    class clienteLogoff{

        function __construct(){
            unset($_SESSION['clienteid']); //SESSION é PARA DESTRUI A INFORMAÇÃo para deslogar
            unset($_SESSION['clientenome']);
            unset($_SESSION);
            header("location: http://www.qualificaroficina.web70113.uni5.net/login/cliente");

        }
    }
?>