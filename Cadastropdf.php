<?php
    require_once("config/dataBase.php");
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    if(isset($_POST["acao"])){
        $nome = $_POST["nome"];
        $autor = $_POST["autor"];

        if(isset($_FILES["pdf"]) && !empty($_FILES["pdf"])){
            $pdf = "./uploads/".$_FILES["pdf"]["name"];
            move_uploaded_file($_FILES["pdf"]["tmp_name"], $pdf);
        }

        if(isset($_FILES["capa"]) && !empty($_FILES["capa"])){
            $imagem = "./uploads/".$_FILES["capa"]["name"];
            move_uploaded_file($_FILES["capa"]["tmp_name"], $imagem);
        }

        $sql = $pdo->prepare("INSERT INTO biblioteca VALUES (null, ?, ?, ?, ?)");
        $sql->execute(array($nome, $autor, $pdf, $imagem));

        $status = 2;
        header("Location: addLivro.php?status=".urldecode($status)); 
    }
?>