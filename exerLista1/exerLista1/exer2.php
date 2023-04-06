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
        <h2>Conversão</h2>
        <h3>Celsius(C) - Fahrenheit(F)</h3>
        <p>valor: <input type="number" name="valor" ></p>
        <p>Converte para:
        <label for="escolha"><input type="radio" name="escolha" value="C">Celsius</label>
        <label for="escolha"><input type="radio" name="escolha" value="F">Fahrenheit</label></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
<?php
  
    if(isset($_GET['enviar'])){
      $valor = $_GET['valor'];
      $esc = $_GET['escolha'];
      
      switch($esc){
        case "C": 
          echo "O valor em Celsius é " . ($valor - 32) / 1.8;
          break;
        case "F": 
          echo "O valor em Fahrenheit é " . ($valor * 1.8 + 32); 
          break;
      }
    }else{
      echo "aguardando...";
    }
      

?>
</html>