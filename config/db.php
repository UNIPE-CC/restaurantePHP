<?php 
    $conexao = mysqli_connect("servidor", "login", "senha"); 

    if($conexao)
        echo "Conexao estabelecida com sucesso!";
    else
        echo "Erro ao conectar";


    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_selecte_db($conexao, "nomeTabela");


    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_select_db($conexao, "nomaTabela");
    // mysqli_query("Query SQL");


    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_select_db("cadastro", $conexao);
    // mysqli_query("
    //     CREATE TABLE pessoas
    //     (
    //         id int(auto_incremento),
    //         nome varchar(75)
    //     )
    // ");


    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_select_db("cadastro", $conexao);
    // mysqli_query("
    //     INSERT INTO pessoas
    //     (nome)
    //     VALUES
    //     ('Joao')
    // ");
    

    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_select_db("cadastro", $conexao);
    // $dados = mysqli_query("SELECT * FROM PESSOAS");
    // while($tabela = mysqli_fetch_array($dados)){
    //     echo $tabela['nome'] . '<br>';
    // }


    // $conexao = mysqli_connect("servidor", "login", "senha"); 
    // mysqli_select_db("nomaTabela", $conexao);
    // mysqli_query("Query SQL");
    // myqli_close($conexao);
?>