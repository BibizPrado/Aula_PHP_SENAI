<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
	$users = array(
        "nome" => array("Emerson","Bruna","Bia","Ezio","Davyd"),
        "email" => array("Emerson@senai.com","Bruna@senai.com","Bia@senai.com","Ezio@senai.com","Davyd@senai.com"),
        "senha" => array("123","123","123","123","123")
    ) ;
?>
<body>
    <H1>pesquisar cidade</H1>
    <h3>Escolha um país</h3>
    <form action="" method="get">
        <p>valor: <input type="text" name="valor"></p>
        <input type="submit" value="Pesquisar" name="pesquisar">
        <input type="submit" value="All" name="MostrarTudo">
    </form>
</body>
<?php
if(isset($_GET['pesquisar'])){
    $valor = $_GET['valor'] - 1;
    if($valor > -1 && $valor < 5)
    echo "Usuário: " . $users['nome'][$valor] . " E-mail: " . $users['email'][$valor] . " Password: " . $users['senha'][$valor];
}
if(isset($_GET['MostrarTudo'])){
    for ($i=0; $i < 4; $i++) { 
        echo "<br>Usuário: " . $users['nome'][$i] . " E-mail: " . $users['email'][$i] . " Password: " . $users['senha'][$i];
    }
}
?>
</html>

