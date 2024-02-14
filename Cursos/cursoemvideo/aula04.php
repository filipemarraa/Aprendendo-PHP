<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>
<body>
    <h1>TESTE DE TIPOS PRIMITIVOS</h1>

    <?php 
    $num = 300;
    echo "O valor da variavel é $num ";
    $num = 0x1A; // 0x = hexadecimal 0b = binario 0 = Octal
    echo " O valor é $num   ";
     

    $v = 53.2;
    var_dump($v); //Mostra os valores(Testa os tipos primitivos)

    $vert = [6, 2.5. 3.8, 7, False, "João"];
    var_dump($vert);

    class Pessoa{
        private string $nome;
    }

    $p = new Pessoa;
    var_dump($p);
    ?>
    
</body>
</html>