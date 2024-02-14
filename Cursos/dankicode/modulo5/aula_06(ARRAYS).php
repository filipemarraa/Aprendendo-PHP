<?php 

$nome1 = "Joao";
$nome2 = "Guilherme";  // --> NADA LEGAL! MUITO INICIANTE
$nome3 = "Mauricio";

/*
    Arrays = Variáveis com diversas chaves!
*/
 

//MANEIRA 1 
 $nome = array("Joao", "Guilherme", "Mauricio");

 echo $nome[1];

//MANEIRA 2 
 $sobrenome[] = "Silva"; //Indice 0
 $sobrenome[] = "Moreira"; // Indice 1
 
 echo $sobrenome[0];
 
 //MANEIRA 3 
 $apelido[100] = "Lipe";

 echo $apelido[100];


 /*     NOVA VERSÃO    */

 $variaveis = ["Guilheme", "Joao", "Lucas"];
 
 echo $variaveis[2];


 //Pode misturar todos os jeitos
 $jeitos = ["Paulo", 23, true, 10, 3.14];
 
 echo $jeitos[4];


?>