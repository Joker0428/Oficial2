<?php

    namespace LOJA\Model;
    use LOJA\incluedes\Config;

    class Conexao{
        private function __construct(){
            
        }
        public static function getInstance(){
            try {
                /*$conexao = new \PDO("mysql:host={$serverHost}; dbname={$serverDB}", "{$serverUser}", "{$serverPass}");

                $conexao = new \PDO("mysql:host=mysql18-farm70.uni5.net; dbname=qualificarofic", "qualificarofic", "senac10058");
                $conexao = new \PDO("mysql:host=mysql18-farm70.uni5.net; dbname=qualificarofic", "qualificarofic", "senac10058");*/
                $conexao = new \PDO("mysql:host=localhost; dbname=bigode", "root", "");

                $config = new Config();
            //    $conexao = new \PDO("mysql:host={$config->serverHost}; dbname={$config->serverDB}", "{$config->serverUser}", "{$config->serverPass}");

                $conexao = new \PDO("mysql:host=mysql18-farm70.uni5.net; dbname=qualificarofic", "qualificarofic", "senac10058");*/
                // $conexao = new \PDO("mysql:host=localhost; dbname=bigode", "root", "");
                
                $config = new Config();
                // $conexao = new \PDO("mysql:host={$config->serverHost}; dbname={$config->serverDB}", "{$config->serverUser}", "{$config->serverPass}");
                $conexao = new \PDO("mysql:host=mysql18-farm70.uni5.net; dbname=qualificarofic", "qualificarofic", "senac10058"); // comentar esse

                $conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                $conexao->exec("set names utf8");
                
                return $conexao;
            } catch (\PDOException $erro) {
                
                return null;
            }
        }
    }
?>