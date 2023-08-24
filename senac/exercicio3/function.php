<?php
    function dizer_ola($nome){
        echo "Olá, $nome! <br>";
    }

    dizer_ola("aluno");
    dizer_ola("professor");
    dizer_ola("João");

    function soma_dez($num){
        return 10 + $num;
    }

    echo "Daqui 10 anos, você terá " . soma_dez(18);

    echo "<br>";

    function ecoar(){
        echo "ecoar";
    }

    ecoar();
?>