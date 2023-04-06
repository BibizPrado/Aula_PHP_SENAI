<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
	$pais = array("BRA" =>"Brasil","ING" =>"Inglaterra","EUA" =>"Estados Unidos") ;
?>
<body>
    <H1>pesquisar cidade</H1>
    <h3>Escolha um país</h3>
    <form action="" method="get">
        <p><input type="radio" name="pais" value="BRA" >BRA</p>
        <p><input type="radio" name="pais" value="ING" >ING</p>
        <p><input type="radio" name="pais" value="EUA" >EUA</p>
        <input type="submit" value="Pesquisar" name="pesquisar">
    </form>
</body>
<?php
if(isset($_GET['pesquisar'])){
    $esc = $_GET['pais'];
    echo "O país escolhido foi: " . $pais[$esc];
}
?>
</html>