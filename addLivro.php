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
    <link rel="stylesheet" href="assets/css/adicionarFuncionario.css">
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
            <form action="Cadastropdf.php" method="post" enctype="multipart/form-data">
            <h3>Informações do Livro</h3>
            <div class="w100">
                <div class="w4">
                    <p>Nome do livro</p>
                    <input type="text" name="nome">
                </div>
                <div class="w4">
                    <p>Nome do Autor</p>
                    <input type="text" name="autor">
                </div>
                <div class="w4">
                    <p>PDF do Livro</p>
                    <input type="file" name="pdf" accept="images/*" class="form-control">
                </div>
                <div class="w4">
                    <p>Foto da Capa</p>
                    <input type="file" name="capa" accept="images/*" class="form-control">
                </div>
            </div>

            <input type="hidden" name="type" value="8">

            <div class="w100s">
                <button type="submit" name="acao"><i class="fa-solid fa-check"></i> Salvar Funcionário</button><br>
            </div>
                </div>
            </form>
        </div>
    </aside>
    <br>

    <script src="assets/js/main.js"></script>
 </body>
</html>