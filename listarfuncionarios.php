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
    <link rel="stylesheet" href="assets/css/listarfuncionarios.css">
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
                    <h3><i class="fa-solid fa-receipt"></i> Lista de Funcionarios - Fevereiro de 2024</h3>
                </div>
                <div class="content">
                    <div class="cell">
                        <div class="topic">Nome</div>
                        <?php
                            $sql = $pdo->prepare("SELECT * FROM funcionario");
                            $sql->execute();

                            $infos = $sql->fetchAll();

                            foreach($infos as $info){
                                echo '<div class="topic">'.$info['PrimeiroNome'].' '.$info['Sobrenome'].'</div>';
                            }
                        ?>
                    </div>

                    <div class="cell">
                        <div class="topic">Departamento</div>
                        <?php
                            $sql = $pdo->prepare("SELECT * FROM funcionario");
                            $sql->execute();

                            $infos = $sql->fetchAll();

                            foreach($infos as $info){
                                echo '<div class="topic">'.$info['Departamento'].'</div>';
                            }
                        ?>
                    </div>


                    <div class="cell">
                        <div class="topic">Salario</div>
                        <?php
                            $sql = $pdo->prepare("SELECT * FROM funcionario");
                            $sql->execute();

                            $infos = $sql->fetchAll();

                            foreach($infos as $info){
                                echo '<div class="topic">'.$info['SalarioBasico'].'</div>';
                            }
                        ?>
                    </div>


                    <div class="cell">
                        <div class="topic">Opcoes</div>

                        <?php
                            $sql = $pdo->prepare("SELECT * FROM funcionario");
                            $sql->execute();

                            $infos = $sql->fetchAll();

                            foreach($infos as $info){
                                echo '
                                <div class="topic" style="background-color:#fff;">
                                    <div class="ico">
                                    <a href=""><img src="assets/images/Vector.png" alt=""></a> 
                                    <a href="src/Controller/Delete.php?id='.$info["ID"].'"><img src="assets/images/ico1.png" alt=""></a> 
                                    <a href="src/Controller/edit.php?id='.$info["ID"].'"><img src="assets/images/ico2.png" alt=""></a> 
                                    </div>
                                </div>
                                ';
                                }
                            ?>

                    </div>
                </div>
            </div>
        </div>
    </aside>


    <script src="assets/js/main.js"></script>
 </body>
</html>