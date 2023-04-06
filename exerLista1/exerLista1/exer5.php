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
        <h2>Calculadora de segundos</h2>
        <p>segundos: <input type="number" name="valor" ></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <p id="textAguardo"></p>
    <script>
      let text = "aguarde";
      let num = 1;
      function aguarde(){
        let campo = document.getElementById('textAguardo');
        
        
        if(num < 4){
          text += ".";
          num++;
        }else{
          text = "aguarde";
          num = 1;
          
        }
        campo.innerHTML = text;
        
      }

     setInterval(aguarde, 500);
    </script>
</body>
<?php
  
    if(isset($_GET['enviar'])){
      $valor = $_GET['valor'];

      $horas = intval($valor / 3600);
      $minutos = intval(($valor % 3600) / 60);
      $segundos = intval(($valor % 3600) % 60); 
      
      echo "<br> Horas: " . $horas;
      echo "<br> minutos: " . $minutos;
      echo "<br> segundos: " . $segundos;
      
      
    }else{
      echo "aguardando...";
    }
      

?>
</html>