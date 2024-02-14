<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style05.css">
    <title>Dashboard</title>
</head>
<body>
    
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    
    <main>

    <?php 


        $n = $_GET["nome"] ?? "Nome não informado";
        $s = $_GET["sobrenome"] ?? "Sobrenome não informado";
        echo "É um grande prazer te conhecer, <strong>$n $s!</strong> Este é a sua Dashboard";
       
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>


    </main>
</body>
</html>