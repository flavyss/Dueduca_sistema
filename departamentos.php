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
    <link rel="stylesheet" href="assets/css/departamentos.css">
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
            <form action="">
                <div class="search">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="search" name="livro">
                </div>
            </form>
            <form class="add" action="addDepartamento.php" method="post">
                <button>
                    Adicionar
                </button>
            </form>
        </div>
        <div class="cardsCont">

        <?php
            $sql = $pdo->prepare("SELECT * FROM departamentos");
            $sql->execute();

            $infos = $sql->fetchAll();

            $cores = array('--vrd', '--azu', '--azf', '--rx');

            $indiceCor = 0;

            foreach ($infos as $info) {
                $corAtual = $cores[$indiceCor];

                echo '
                <div class="cardSingle">
                    <div class="cardCont" style="background-color: var(' . $corAtual . ');">
                        <div class="title">
                            <h3>' . $info['departamento'] . '</h3>
                            <img src="assets/images/vt.png" alt="">
                        </div>
                        <div class="footer">
                            <i class="fa-solid fa-bookmark"></i>
                            <span class="number">0</span>
                        </div>
                    </div>
                </div>';

                $indiceCor = ($indiceCor + 1) % count($cores);
            }
            ?>
            </div>
        </div>
    </aside>


    <script src="assets/js/main.js"></script>
 </body>
</html>