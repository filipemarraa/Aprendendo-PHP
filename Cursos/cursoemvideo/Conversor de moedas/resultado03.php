<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas basico</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <h1>Cotação em dolar</h1>

    <section>

    <?php 
    
    $num = $_GET["sal"]; //Seu salario adicionado na pagina anterior
    $dol = 4.98; //Cotação do Dolar 08/02/2024

    $result = $num / $dol;

    //echo "Seus R\$$num  equivalem em <strong>US\$$result</strong>";

    echo "Seus R\$ " . number_format($num, 2, ",", ".") . " equivalem a US\$ " . number_format($result, 2, ",", ".");
    
    ?>



    </section>

</body>
</html>