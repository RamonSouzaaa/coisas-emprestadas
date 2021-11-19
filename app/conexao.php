<?php
    define("SERVIDOR", "localhost:3306");
    define('USUARIO', "root");
    define("SENHA", "");
    define("BANCO", "coisas_emprestadas");
    
    function conectar(){
        $conexao = new mysqli(constant("SERVIDOR"), constant("USUARIO"), constant("SENHA"), constant("BANCO"));
        return $conexao;
    }

    function desconectar($conexao){
        return $conexao->close();
    }

?>
