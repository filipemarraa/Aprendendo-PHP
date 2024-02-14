<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de número</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>

<header>
    <h1>Número sorteado</h1>
</header>

 <section>

 <?php
 
 $max = $_GET["max"] ?? "Maximo não informado";
 $min = $_GET["min"] ?? "Minimo não informado";
  
  $num = rand($max,$min);
  echo "O numero sorteado foi <strong>$num</strong>";

 ?>

 <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

 </section>
    
</body>
</html>