//SIMULE UM RADAR DE VELOCIDADE, EM QUE DADA A VELOCIDADE DO MOTORISTA QUE ELE PASSOU PELO RADAR E ESCREVA A MENSAGEM CONFORME A TABELA
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RADAR</title>
</head>
<body>
    <form action="" method="get">
        <P>VELOCIDADE: <input type="number" name="valor" id="valor" required></P>
        <input type="submit" value="Processar" name="processar">
    </form>
</body>
<?php
    if(isset($_GET['processar'])){
        $valor = $_GET['valor'];
        if($valor < 50){
            echo "Velocidade OK!";
        }else if($valor < 60){
            echo "Cuidado!";
        }else{
            echo "Multado otário!";
        }
    }else{
        echo "aguardando";
    }
?>
</html>