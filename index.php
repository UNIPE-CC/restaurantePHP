<?php 
    include_once("includes/header.php");
    include_once("includes/menu.php");

    if(empty($_SERVER["QUERY_STRING"])){
        include_once("pages/home.php");
    }else{
        if(isset($_GET['pg'])){
            $pg = $_GET['pg'];
            $page = "pages/{$pg}.php";

            if(file_exists($page)){
                include_once($page);
            }else{
                echo "Página não existe!";
            }
        }else{
            echo "Página não encontrada!";
            }
    }
    include_once("includes/footer.php");
?>