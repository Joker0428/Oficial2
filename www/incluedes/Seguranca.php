<?php
namespace LOJA\incluedes;

class Seguranca{
  
    public static function restritoAdm(){
        if(!isset($_SESSION['usuarioid'])){
            header("location: http://www.qualificaroficina.web70113.uni5.net/login/adm");
        }
    }
}