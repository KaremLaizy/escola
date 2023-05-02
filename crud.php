<?php
    include("conecta.php"); // faz a conexão com a base de dados
    
    $cpf   = $_POST ["cpf"]; // pega o imput do CPF
    $nome  = $_POST ["nome"];
    $idade = $_POST ["idade"];

    // vamos agora verificar em qual botão foi clicado

    if (isset($_POST ["iserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO alunos VALUES('$cpf', '$nome', $idade)");
        $resultado = $comando->execute();
        header("Location: index.html"); //volta, 
    }

?>