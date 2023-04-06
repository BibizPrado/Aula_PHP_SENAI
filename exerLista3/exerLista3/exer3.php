//LFaça um programa que leia três valores distintos e escreva o menor deles
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>três valores</title>
</head>
<body>
    <form action="" method="get">
        <P>valor1: <input type="number" name="valor1" id="valor1" min="0" step="1"required></P>
        <P>valor2: <input type="number" name="valor2" id="valor2" min="0" step="1"required></P>
        <P>valor3: <input type="number" name="valor3" id="valor3" min="0" step="1"required></P>
        <input type="submit" value="Comparar" name="comparar">
    </form>
</body>
<?php
    if(isset($_GET['comparar'])){
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $valor3 = $_GET['valor3'];

        if($valor1 > $valor2){
            if($valor1 > $valor3){
                echo "primeiro maior";
            }
        }else if($valor2 > $valor3){
            echo "segundo maior";
        }else{
            echo "terceiro maior";
        }
    }else{
        echo "aguardando";
    }
?>
</html>