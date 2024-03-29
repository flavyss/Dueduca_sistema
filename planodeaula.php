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
    <link rel="stylesheet" href="assets/css/planodeaula.css">
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
                    <div class="title">
                        <h3>Portugues</h3>
                        <img src="assets/images/vt.png" alt="">
                    </div>
                    <div class="footer">
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            <div class="cardSingle">
                <div class="cardCont" style="background-color:var(--azu);">
                    <div class="title">
                        <h3>Portugues</h3>
                        <img src="assets/images/vt.png" alt="">
                    </div>
                    <div class="footer">
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            <div class="cardSingle">
                <div class="cardCont" style="background-color:var(--azf);">
                    <div class="title">
                        <h3>Portugues</h3>
                        <img src="assets/images/vt.png" alt="">
                    </div>
                    <div class="footer">
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            <div class="cardSingle">
                <div class="cardCont">
                    <div class="title">
                        <h3>Portugues</h3>
                        <img src="assets/images/vt.png" alt="">
                    </div>
                    <div class="footer">
                        <i class="fa-solid fa-bookmark"></i>
                        <span class="number">0</span>
                    </div>
                </div>
            </div>

            </div>

            <div class="buttons">
                <a href=""><button style="background-color:var(--azu);"><i class="fa-solid fa-print"></i> Imprimir</button></a>
            </div>

            <div class="tables">
                <div class="tableSingle">
                    <div class="tableCont">
                    <div class="title"style="background-color:var(--rx);">
                        <div class="init">
                            <i class="fa-solid fa-book"></i>
                            <h2>Plano de aula -  Matematica - 22/10/2001</h2>
                        </div>
                        </div>
                        <div class="cells">
                            <div class="text">
                                <p>Topico do plano</p>
                            </div>
                            <div class="content"></div>
                        </div>
                        <div class="cells">
                            <div class="text">
                                <p>Topico do plano</p>
                            </div>
                            <div class="content"></div>
                        </div>
                        <div class="cells">
                            <div class="text">
                                <p>Topico do plano</p>
                            </div>
                            <div class="content"></div>
                        </div>
                        <div class="cells">
                            <div class="text">
                                <p>Topico do plano</p>
                            </div>
                            <div class="content"></div>
                        </div>
                        <div class="cells">
                            <div class="text">
                                <p>Topico do plano</p>
                            </div>
                            <div class="content"></div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </aside>

    <script src="assets/js/main.js"></script>
 </body>
</html>