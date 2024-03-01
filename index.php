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
    <link rel="stylesheet" href="assets/css/index.css">
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
                            <h3>Turmas</h3>
                            <img src="assets/images/vt.png" alt="">
                        </div>
                        <div class="footer">
                            <i class="fa-solid fa-bookmark"></i>

                            <?php
                                $sql = $pdo->prepare("SELECT * FROM turma");
                                $sql->execute();

                                $turmas = $sql->fetchAll();
                                
                                echo '<span class="number">'.count($turmas).'</span>';
                            ?>
                        </div>
                    </div>
                </div>

                <div class="cardSingle">
                    <div class="cardCont" style="background-color:var(--azu);">
                        <div class="title">
                            <h3>Alunos</h3>
                            <img src="assets/images/vt.png" alt="">
                        </div>
                        <div class="footer">
                            <i class="fa-solid fa-bookmark"></i>
                            <?php
                                $sql = $pdo->prepare("SELECT * FROM Aluno");
                                $sql->execute();

                                $aluno = $sql->fetchAll();
                                
                                echo '<span class="number">'.count($aluno).'</span>';
                            ?>                        </div>
                    </div>
                </div>

                <div class="cardSingle">
                    <div class="cardCont" style="background-color:var(--azf);">
                        <div class="title">
                            <h3>Funcionarios</h3>
                            <img src="assets/images/vt.png" alt="">
                        </div>
                        <div class="footer">
                            <i class="fa-solid fa-bookmark"></i>
                            <?php
                                $sql = $pdo->prepare("SELECT * FROM funcionario");
                                $sql->execute();

                                $funcionarios = $sql->fetchAll();
                                
                                echo '<span class="number">'.count($funcionarios).'</span>';
                            ?>
                            </div>
                    </div>
                </div>

                <div class="cardSingle">
                    <div class="cardCont">
                        <div class="title">
                            <h3>Turmas</h3>
                            <img src="assets/images/vt.png" alt="">
                        </div>
                        <div class="footer">
                            <i class="fa-solid fa-bookmark"></i>
                            <span class="number">0</span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cardsAvisos">
             
                <div class="cardSingle">
                    <div class="cardCont2">

                        <div class="perfil">
                            <div class="foto">
                                <img src="assets/images/useru.png" alt="">
                            </div>
                            <div class="description">
                                <h2><?php echo $nome?></h2>
                                <p><span>Email: </span> <?php echo $email?></p>
                                <p><span>Funcao: </span> Diretor</p>
                            </div>
                        </div>

                        <div class="buttons">
                            <button><i class="fa-solid fa-gear"></i> Configuracoes</button><br>
                            <button><i class="fa-solid fa-gear"></i> Tema</button><br>
                            <button><i class="fa-solid fa-gear"></i> Mensagens</button><br>
                        </div><br>
                    </div>
                </div>

                <div class="cardSingle">
                    <div class="cardCont2">
                        <div class="headCard">
                            <div class="title">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <h2>Avisos</h2>
                            </div>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                </div>

                <div class="cardSingle">
                    <div class="cardCont2">
                        <div class="headCard">
                            <div class="title">
                                <i class="fa-regular fa-clock"></i>
                                <h2>Solicitacoes</h2>
                            </div>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                </div>

                
            </div>

            <div class="cardsAvisos">
             
                <div class="cardSingle">
                    <div class="cardCont2">
                        <div class="headCard">
                            <div class="title">
                            <i class="fa-regular fa-note-sticky"></i>
                            <h2>Bloco de Notas</h2>
                            </div>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>

                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                        <div class="cellsCard">
                            <div class="content"></div>
                            <i class="fa-solid fa-trash"></i>
                        </div>
                    </div>
                </div>


                <div class="cardSingle" style="width:66.6%;">
                    <div class="cardCont2">
                        <div class="headCard">
                            <div class="title">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                                <h2>Relacao de Matriculas</h2>
                            </div>
                        </div>
                        <div class="cellsCard">
                            <canvas id="myChart" style="width:100%;"></canvas>
                        </div>
                    </div>
                </div>
        
            </div>

        </div>
    </aside>

    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['jan', 'fev','mar', 'abr', 'mai', 'jun', 'jul', 'ago','set', 'out', 'nov', 'dez'], 
        datasets: [{
            label: 'Matriculas',
            data: [1500,500,1750,1200,992,2150,1000,1750,1600,952,2110,1050],
            borderWidth: 1
        }]
        },
        options: {
        scales: {
            y: {
            beginAtZero: true
            }
        }
        }
    });
    </script>

 </body>
</html>