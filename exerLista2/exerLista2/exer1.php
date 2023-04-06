<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
	$cidades = array(1 =>"Osasco","Carapicuiba","São Paulo","Barueri","Guarulhos") ;
    $size = count($cidades);
?>
<body>
    <H1>pesquisar cidade</H1>
    <h3>Insira um valor de 1 a <?php echo $size?></h3>
    <form action="" method="get">
        <p>valor: <input type="text" name="valor"></p>
        <input type="submit" value="Pesquisar" name="pesquisar">
    </form>
</body>
<?php
if(isset($_GET['pesquisar'])){
    $index = $_GET['valor'];
    if($index <= $size && $index > 0){
        echo "A cidade na posicao $index é ". $cidades[$index];
    }else{
        echo "cidade inexistente para o valor pesquisado";
    }
}
?>
</html>