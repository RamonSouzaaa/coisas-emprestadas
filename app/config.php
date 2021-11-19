<?php

    function criarSessao($array_usuario){
        if(!isset($_SESSION['usuarioLogado'])){
            session_start();
            $_SESSION['usuarioLogado'] = $array_usuario;
        }
    }

    function destruirSessao(){
        session_start();
        if(isset($_SESSION['usuarioLogado'])){
            unset($_SESSION['usuarioLogado']);
            session_destroy();
        }
    }

    function verificaSessao(){
        session_start();
        return isset($_SESSION['usuarioLogado']);
    }
?>