<?php 
    require_once("src/Controller/verify.php");
    require_once("config/dataBase.php");

    $nome = $_SESSION["nome"];
    $email = $_SESSION["email"];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuEDUCA</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/chat.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/menuLateral.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/c49e0b56e6.js" crossorigin="anonymous"></script>

</head>
<body>
    <?php include("includes/header.php")?>
    <aside class="one">
        <?php include("includes/menuLateral.php")?>
    </aside>
    <aside class="two">
        <div class="container">
            <aside class="contacts">
                <form action="">
                    <div class="search">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="search" name="livro">
                    </div>
                </form>

                <h3>Suas Conexoes</h3>

                <div class="profiles">
                    <div class="profilesingle">
                        <div class="profile">
                            <div class="img">
                                <img src="assets/" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <aside class="chat">

            </aside>
        </div>
    </aside>

 </body>
</html>