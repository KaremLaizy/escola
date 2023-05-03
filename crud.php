<?php
    include("conecta.php"); // faz a conexão com a base de dados
    
    $cpf   = $_POST ["cpf"]; // pega o imput do CPF
    $nome  = $_POST ["nome"];
    $idade = $_POST ["idade"];

    // vamos agora verificar em qual botão foi clicado

    if (isset($_POST ["inserir"]))
    {
        $comando = $pdo->prepare("INSERT INTO aluno VALUES('$cpf','$nome',$idade)");
        $resultado = $comando->execute();
        header("Location: index.html"); //volta, 
    }

    if (isset($_POST ["excluir"]))
    {
        $comando = $pdo->prepare("DELETE FROM aluno WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html"); //volta, 
    }

    if (isset($_POST ["alterar"]))
    {
        $comando = $pdo->prepare("UPDATE aluno SET nome='$nome', idade=$idade WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html"); //volta, 
    }

?>