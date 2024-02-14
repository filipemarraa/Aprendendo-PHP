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
    <h1>Sorteie um número</h1>
</header>

 <section>
    <a href='resultado02.php'><button>Aperte para sortear um número aleatorio</button></a>
    <br>
    <br>
    <form action="resultado01.php" method="get">
            <label for="max">Numero Maximo: </label>
            <input type="number" name="max" id="idmax">
            <label for="min">Numero Minimo: </label>
            <input type="number" name="min" id="idmin">
            <input type="submit" value="Sortear">


    </form>

 </section>
    
</body>
</html>