<?php 

/*REPETICOES (LOOPING)*/

/*FACIL*/

// LAÇO DE REPETIÇÃO

//QUANDO == FOR

for($contador = 0; $contador<10; $contador++){
    echo "Olá mundo";
    echo "<hr>";
}

    echo "<br>";

/*
for($teste = 10; $teste>0; $teste--){
    echo "Teste";
    echo "<hr>";
}
*/


/*MEDIO*/

//Laço de repitição while

$nmr = 0;
//WHILE = ENQUANTO
while($nmr < 10){
    echo"ALOU";
    echo "<hr><br>";
    $nmr++; //ou $nmr+=1;
}



/*DIFICIL*/



$rep = 0;
//DO = FAÇA
do{
    echo "Ola rpzd";
    echo "<br>";        //QUERO QUE FAÇA ISSO ENQUANTO O $REP FOR MENOR QUE 10
    $rep++;
}while($rep < 10);


?>