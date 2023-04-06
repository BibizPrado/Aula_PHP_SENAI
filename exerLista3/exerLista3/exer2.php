//Ler dois valores e imprimir uma das três mensagens a seguir
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>two valores</title>
</head>
<body>
    <form action="" method="get">
        <P>valor1: <input type="number" name="valor1" id="valor1" required></P>
        <P>valor2: <input type="number" name="valor2" id="valor2" required></P>
        <input type="submit" value="Comparar" name="comparar">
    </form>
</body>
<?php
    if(isset($_GET['comparar'])){
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];

        if($valor1 == $valor2){
            echo "números iguais";
        }else if($valor1 > $valor2){
            echo "Primeiro é maior";
        }else{
            echo "Segundo maior";
        }

        
    }else{
        echo "aguardando";
    }
?>
</html>