//Declare uma variável para receber o valor do salário e outra para receber o valor do resjute, na sequência faça o reajuste
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
</head>
<body>
    <form action="" method="get">
        <h1>Reajuste salarial</h1>
        <P>Salário: <input type="number" name="salario" id="salario" min="0" required></P>

        <input type="submit" value="Calcular" name="calcular">
    </form>
</body>
<?php
    if(isset($_GET['calcular'])){
        $salario = $_GET['salario'];
        $reajuste;
        if( $salario < 1200){
            $reajuste = 300;
        }else if($salario <= 1600){
            $reajuste = 250;
        }else{
            $reajuste = 200;
        }
        echo "Seu Salário aumentou em " . $reajuste . "<br>totalizando: " . ($salario + $reajuste);
    }else{
        echo "aguardando";
    }
?>
</html>