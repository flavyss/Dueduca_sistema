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
    <link rel="stylesheet" href="assets/css/exames.css">
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
        <div class="top">
                <br>
            <form action="">
                <div class="search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="search" name="livro">
                </div>
                <select name="categoria">
                    <option value="">Categoria</option>
                </select>
            </form>
        </div>
        <br>

            <div class="table">
                <div class="target">
                    <h3><i class="fa-solid fa-receipt"></i> Folha de Pagamento - Fevereiro de 2024</h3>
                </div>
                <div class="content">
                    <div class="cell">
                        <div class="topic">Turma</div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>
                    </div>

                    <div class="cell">
                        <div class="topic">Professor</div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>
                    </div>


                    <div class="cell">
                        <div class="topic">Exame</div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>
                    </div>


                    <div class="cell">
                        <div class="topic">Resultado</div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>

                        <div class="topic"></div>
                        <div class="topic"></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>


    <script src="assets/js/main.js"></script>
 </body>
</html>