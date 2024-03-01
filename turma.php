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
    <link rel="stylesheet" href="assets/css/turma.css">
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

            <div class="cardsCont">

                <div class="cardSingle">
                    <div class="cardCont" style="background-color:var(--vrd);">
                    <a href="novaturma.php">
                        <div class="title">
                            <h3 style="width: 100%;text-align:center;">Nova Turma</h3>
                        </div>
                        <div class="more">
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </a>
                    </div>
                </div>

                <?php
                    $sql = $pdo->prepare("SELECT * FROM turma");
                    $sql->execute();

                    $infos = $sql->fetchAll();


                    $cores = array('--vrd', '--azu', '--azf', '--rx');

                    $indiceCor = 1;

                    foreach($infos as $info){
                        $corAtual = $cores[$indiceCor];

                        echo'
                        <div class="cardSingle">
                            <div class="cardCont" style="background-color: var(' . $corAtual . ');">
                                <div class="title">
                                    <h3>'.$info["materia"].'</h3>
                                    <img src="assets/images/vt.png" alt="">
                                </div>
                                <div class="middle">
                                    <p>Professor</p>';

                        $id = $info['funcionario'];
                        $sql = $pdo->prepare("SELECT * FROM funcionario WHERE ID = ?");
                        $sql->execute(array($id));

                        $infosp = $sql->fetchAll();

                        foreach($infosp as $infop){
                            echo '<h3>'.$infop["PrimeiroNome"].' '.$infop["Sobrenome"].'</h3>';
                        }

                        
                        echo'
                                    <p>Turma</p>
                                    <h3>'.$info["turma"].'</h3>
                                </div>
                                <div class="footer">
                                    <div class="icons">
                                        <i class="fa-solid fa-bookmark"></i>
                                        <span class="number">0</span>
                                    </div>
                                    <div class="icons">
                                        <i class="fa-solid fa-bookmark"></i>
                                        <span class="number">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ';

                        $indiceCor = ($indiceCor + 1) % count($cores);

                    }
                ?>


            </div>
            <div class="tables">
                <div class="tableSingle">
                    <div class="tableCont">
                        <div class="title">
                            <div class="init">
                                <i class="fa-solid fa-book"></i>
                                <h2>Atividades</h2>
                            </div>
                            <a href="atividadeTuma.php">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="cells"></div>
                        <div class="cells"></div>

                        <div class="cells"></div>
                        <div class="cells"></div>

                        <div class="cells"></div>
                        <div class="cells"></div>
                    </div>
                </div>

                <div class="tableSingle">
                    <div class="tableCont">
                    <div class="title"style="background-color:var(--rx);">
                        <div class="init">
                            <i class="fa-solid fa-book"></i>
                            <h2>Anotacoes</h2>
                        </div>
                        <a href="anotacaoTuma.php">
                                <i class="fa-solid fa-plus"></i>
                        </a>
                        </div>
                        <div class="cells"></div>
                        <div class="cells"></div>

                        <div class="cells"></div>
                        <div class="cells"></div>

                        <div class="cells"></div>
                        <div class="cells"></div>

                    </div>
                </div>
            </div>
    </aside>

    <script src="assets/js/main.js"></script>
 </body>
</html>