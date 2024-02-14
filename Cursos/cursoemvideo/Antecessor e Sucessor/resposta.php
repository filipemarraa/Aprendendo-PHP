<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $num = $_GET["numero"];
        $ant = $num - 1;
        $suc = $num + 1;
    ?>

    <header>
        <h1>Resultado Final</h1>
    </header>
    <section>

    <?php 
    echo "O seu numero é <strong>$num</strong> <br>";
    echo "O antecessor de $num é $ant <br>";
    echo "O sucessor de $num é $suc <br>";
    ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    

    </section>

   




</body>
</html>