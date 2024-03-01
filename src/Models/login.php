<?php
    require_once("../../config/dataBase.php");

    if(isset($_POST["acao"])){
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $sql = $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
        $sql->execute(array($email));

        $infos = $sql->fetchAll();

        if(count($infos) > 0){
            foreach($infos as $info){
                $emailUser = $info["email"];
                $senhaUser = $info["senha"];

                if(password_verify($senha, $senhaUser)){
                    session_start();
                    $_SESSION["nome"] = $info["nome"];
                    $_SESSION["email"] = $info["email"];
                    $_SESSION["id"] = $info["id"];

                    header("Location: ../../index.php");
                }

                else{
                    $status = 2;
                    header("Location: ../../login.php?status=".urldecode($status)); 
                }
            }
        }
        else{
            $status = 1;
            header("Location: ../../login.php?status=".urldecode($status)); 
        }
    }
?>
