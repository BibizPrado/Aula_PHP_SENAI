<!DOCTYPE html>
<html lang="pt=BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista_1</title>
</head>
<body>
    <form action="" method="GET">
        <h2>Divisão</h2>
        <p>valor 1: <input type="number" name="valor1" ></p>
        <p>valor 2: <input type="number" name="valor2" ></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
<?php
  
    if(isset($_GET['enviar'])){
      $valor1 = $_GET['valor1'];
      $valor2 = $_GET['valor2'];

      echo "<br>Dividendo : " . $valor1;
      echo "<br>Divisor : " . $valor2;
      echo "<br>Quociente : " . $valor1/$valor2;
      echo "<br>resto : " . $valor1%$valor2;
      
    }else{
      echo "aguardando...";
    }
      

?>
</html>