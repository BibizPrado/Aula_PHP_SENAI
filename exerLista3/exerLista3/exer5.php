//Elabore um programa PHP de login e senha com verificação de acesso
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário e Senha</title>
</head>
<body>
    <form action="" method="get">
        <h1>Usuário e Senha</h1>
        <P>Usuário: <input type="text" name="id" id="id" required></P>
        <P>senha: <input type="password" name="senha" id="senha" step="1"required></P>
        <input type="submit" value="Login" name="Login">
    </form>
</body>
<?php
    define ("SENHA", "banana");
    if(isset($_GET['Login'])){
        $id = $_GET['id'];
        $senha = $_GET['senha'];
        if($senha === SENHA){
            echo "Senha Aceita!";
        }else{
            echo "Fraude Detectada! Máquina irá se auto destruir em 10 segundos...";
        }if($id){
            echo "Usuário Aceito!";
        }else{
            echo "Usuário Negado! Máquina irá se auto destruir em 10 segundos... ";
        }     
    }else{
        echo "aguardando";
    }
?>
</html>