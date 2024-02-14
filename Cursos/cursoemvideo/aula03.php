<?php 

 /* VARIAVEL TEM O "$" NA FRENTE */

    /*Variaveis  -> PUDE MUDAR AO LONGO DO TEMPO(É VARIAVEL)*/
    $nome = "Filipe";
    $sobrenome = "Jacobson";

    echo "Muito prazer, $nome $sobrenome! ";

    $sobrenome = "Marra";
    echo "Vc alterou o seu sobrenome para $sobrenome! ";

 
    /*Constante - > NÃO ´PDE MUDAR! (É CONSTANTE)*/
    const PAIS = "Brasil"; # tem que ser em letra MAIUSCULA

    echo " Voce mora no " . PAIS;

    /* = -> RECEBE */

     /*CASE SENSITIVE*/
    $nome = "Pedro";
    echo " É verdade que seu nome é $nome?";
    $Nome = "Maria";
    echo " É verdade que seu nome é $Nome ?";
    $NOME = "João";
    echo " É verdade que seu nome é $NOME ?";


    $salario = 2500.75;
    echo"Seu salário é de R$ $salario";

?>