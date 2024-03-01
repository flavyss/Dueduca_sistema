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
            <form action="src/Models/Cadastro.php" method="post">
            <h3>Informações Básicas</h3>
            <div class="w100">
                <div class="w4">
                    <p>Matrícula</p>
                    <input type="text" name="matricula">
                </div>
                <div class="w4">
                    <p>Nome *</p>
                    <input type="text" name="nome">
                </div>
                <div class="w4">
                    <p>Sobrenome *</p>
                    <input type="text" name="sobrenome">
                </div>
                <div class="w4">
                    <p>Gênero *</p>
                    <input type="text" name="genero">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Data de Nascimento *</p>
                    <input type="text" name="data_nascimento">
                </div>
                <div class="w4">
                    <p>Tipo Sanguíneo</p>
                    <input type="text" name="tipo_sanguineo">
                </div>
                <div class="w4">
                    <p>Endereço de E-mail</p>
                    <input type="email" name="endereco_email">
                </div>
                <div class="w4">
                    <p>Número de Telefone *</p>
                    <input type="text" name="telefone">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Data de Admissão</p>
                    <input type="text" name="data_admissao">
                </div>
                <div class="w4">
                    <p>Altura (em)</p>
                    <input type="text" name="altura">
                </div>
                <div class="w4">
                    <p>Peso (kg)</p>
                    <input type="text" name="peso">
                </div>
                <div class="w4">
                    <p>Foto do Estudante</p>
                    <input type="file" name="foto_estudante">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Nome do Pai</p>
                    <input type="text" name="nome_pai">
                </div>
                <div class="w4">
                    <p>Ocupação do Pai</p>
                    <input type="text" name="ocupacao_pai">
                </div>
                <div class="w4">
                    <p>Telefone do Pai</p>
                    <input type="text" name="telefone_pai">
                </div>
                <div class="w4">
                    <p>Foto do Pai</p>
                    <input type="file" name="foto_pai">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Nome da Mãe</p>
                    <input type="text" name="nome_mae">
                </div>
                <div class="w4">
                    <p>Ocupação da Mãe</p>
                    <input type="text" name="ocupacao_mae">
                </div>
                <div class="w4">
                    <p>Telefone da Mãe</p>
                    <input type="text" name="telefone_mae">
                </div>
                <div class="w4">
                    <p>Foto da Mãe</p>
                    <input type="file" name="foto_mae">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Endereço</p>
                    <input type="text" name="endereco">
                </div>
                <div class="w4">
                    <p>Número da Certidão de Nascimento</p>
                    <input type="text" name="certidao_nascimento">
                </div>
                <div class="w4">
                    <p>CPF</p>
                    <input type="text" name="cpf">
                </div>
                <div class="w4">
                    <p>RG</p>
                    <input type="text" name="rg">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>turma</p>
                    <input type="text" name="turma">
                </div>
            </div>

            <input type="hidden" name="type" value="7">

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