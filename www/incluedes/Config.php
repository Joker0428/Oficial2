<?php
    namespace LOJA\incluedes;
    class Config {
        private $servidor = "TEST"; // PROD OU TEST
        public $url;
        public $serverHost;
        public $serverDB;
        public $serverUser;
        public $serverPass;
        public $cepOrigem;

        public function __construct() {
            if($this->servidor=="TEST") {
                $this->url = "http://localhost/Oficial2/www";
                $this->serverHost = "localhost";
                $this->serverDB = "bigode";
                $this->serverUser = "root";
                $this->serverPass = "";
                $this->cepOrigem = "26298045";
            }
            else {
                $this->url = "http://www.qualificaroficina.web70113.uni5.net";
                $this->serverHost = "mysql18-farm70.uni5.net";
                $this->serverDB = "qualificarofic";
                $this->serverUser = "qualificarofic";
                $this->serverPass = "senac10058";
                $this->cepOrigem = "26298045";
            }
        }
    }
?>