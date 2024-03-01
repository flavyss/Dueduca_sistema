<?php

    require_once("verify.php");
    require_once("../../config/dataBase.php");

    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $id = $_GET["id"];
        $sql = $pdo->prepare("DELETE FROM funcionario WHERE id = ?");
        $sql->execute(array($id));
        header("Location: ../../listarfuncionarios.php");
    }
?>