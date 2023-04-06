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
        <h3>Milimetros - polegadas</h3>
        <p>valor: <input type="number" name="valor" ></p>
        <p>Converte para:
        <label for="escolha"><input type="radio" name="escolha" value="pol">Pol</label>
        <label for="escolha"><input type="radio" name="escolha" value="mili">Mili</label></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
<?php
  
    if(isset($_GET['enviar'])){
      $valor = $_GET['valor'];
      $esc = $_GET['escolha'];
      
      switch($esc){
        case "pol": 
          echo "O valor em polegadas é " . $valor / 25.4;
          break;
        case "mili": 
          echo "O valor em milimetros é " . $valor * 25.4; 
          break;
      }
    }else{
      echo "aguardando...";
    }
      

?>
</html>