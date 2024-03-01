<?php 
    require_once("src/Controller/verify.php");
    require_once("config/dataBase.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DuEDUCA</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/biblioteca.css">
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
        <div class="container"><br>
            <div class="top">
                <form action="">
                    <div class="search">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input type="search" name="livro">
                    </div>
                    <select name="categoria">
                        <option value="">Categoria</option>
                    </select>
                </form>
                <a href="addLivro.php">
                        <button>Adicionar</button>
                    </a>
            </div>

            <div class="books">
                <h2>Mais Relevantes</h2>
                <div class="bookCont">
                    <?php
                        $sql = $pdo->prepare("SELECT * FROM biblioteca");
                        $sql->execute();

                        $infos = $sql->fetchAll();

                        foreach($infos as $info){
                            echo '
                            <div class="booksingle">
                                <div class="bookcontent">
                                    <div class="capa">
                                        <img src="'.$info['capa'].'" alt="">
                                    </div>
                                    <div class="description">
                                        <h3>'.$info['nome'].'</h3>
                                        <p>'.$info['autor'].'</p>
                                        <a href="'.$info['pdf'].'"><button>Baixar</button></a>
                                    </div>
                                </div>
                            </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </aside>

    <script src="assets/js/main.js"></script>
 </body>
</html>