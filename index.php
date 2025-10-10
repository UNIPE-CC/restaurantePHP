<?php 
    include_once("header.php");
    include_once("menu.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $pg = "conteudo.php";
        include_once("$pg");
    }elseif($_GET['pg']){
        $pg = $_GET['pg'];
        include_once("pg.php");
    }else{
        echo "Página não encontrada!";
    }
?>