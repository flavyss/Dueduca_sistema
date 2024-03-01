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
                    <p>Cargo *</p>
                    <input type="text" name="cargo">
                </div>
                <div class="w4">
                    <p>Departamento</p>
                    <select name="departamento" id="">
                    <?php
                        $sql = $pdo->prepare("SELECT * FROM departamentos");
                        $sql->execute();

                        $infos = $sql->fetchAll();


                        foreach ($infos as $info) {
                            echo '<option value="'.$info["departamento"].'">'.$info["departamento"].'</option>';
                        }
                    ?>
                    </select>
                </div>
                <div class="w4">
                    <p>Primeiro Nome *</p>
                    <input type="text" name="primeiro_nome">
                </div>
                <div class="w4">
                    <p>Sobrenome</p>
                    <input type="text" name="sobrenome">
                </div>
            </div>
            <div class="w100">
                <div class="w4">
                    <p>Nome do Pai</p>
                    <input type="text" name="nome_pai">
                </div>
                <div class="w4">
                    <p>Nome da Mãe</p>
                    <input type="text" name="nome_mae">
                </div>
                <div class="w4">
                    <p>Email *</p>
                    <input type="email" name="email">
                </div>
                <div class="w4">
                    <p>Gênero</p>
                    <input type="text" name="genero">
                </div>
            </div>
            <div class="w100">
                <div class="w4">
                    <p>Data de Nascimento</p>
                    <input type="date" name="data_nascimento">
                </div>

                <div class="w4">
                    <p>CPF</p>
                    <input type="text" name="cpf">
                </div>

                <div class="w4">
                    <p>RG</p>
                    <input type="text" name="rg">
                </div>
                <div class="w4">
                    <p>Senha</p>
                    <input type="text" name="senha">
                </div>
            </div>
            <h3>Contato</h3>
            <div class="w100">
                <div class="w4">
                    <p>Data de Admissão</p>
                    <input type="date" name="data_admissao">
                </div>
                <div class="w4">
                    <p>Celular</p>
                    <input type="text" name="celular">
                </div>

                <div class="w4">
                    <p>Estado Civil</p>
                    <input type="text" name="estado_civil">
                </div>

                <div class="w4">
                    <p>Telefone de Emergência</p>
                    <input type="text" name="telefone_emergencia">
                </div>
            </div>

            <div class="w100">
                <div class="w4">
                    <p>Carteira de Motorista</p>
                    <input type="text" name="carteira_motorista">
                </div>

                <div class="w4">
                    <p>Foto do Funcionário</p>
                    <input type="file" name="foto_funcionario">
                </div>
                <div class="w4">
                    <p>Endereço Atual</p>
                    <input type="text" name="endereco_atual">
                </div>

                <div class="w4">
                    <p>Endereço Permanente</p>
                    <input type="text" name="endereco_permanente">
                </div>
            </div>

            <h3>Detalhes da Folha de Pagamento</h3>
            <div class="w100">
                <div class="w4">
                    <p>Número do EPF</p>
                    <input type="text" name="numero_epf">
                </div>

                <div class="w4">
                    <p>Salário Básico</p>
                    <input type="text" name="salario_basico">
                </div>

                <div class="w4">
                    <p>Tipo de Contrato</p>
                    <input type="text" name="tipo_contrato">
                </div>

                <div class="w4">
                    <p>Localização</p>
                    <input type="text" name="localizacao">
                </div>
            </div>

            <h3>Detalhes da Informação Bancária</h3>
            <div class="w100">
            <div class="w4">
                <p>Numero da Conta Bancária</p>
                <input type="text" name="numero_conta_bancaria">
            </div>

            <div class="w4">
                <p>Sem Conta</p>
                <input type="checkbox" name="sem_conta">
            </div>

            <div class="w4">
                <p>Nome do Banco</p>
                <input type="text" name="nome_banco">
            </div>

            <div class="w4">
                <p>Nome Filial</p>
                <input type="text" name="nome_filial">
            </div>
            </div>

            <h3>Detalhes dos Links Sociais</h3>
            <div class="w100">
            <div class="w4">
                <p>URL do Facebook</p>
                <input type="text" name="url_facebook">
            </div>

            <div class="w4">
                <p>URL do Twitter</p>
                <input type="text" name="url_twitter">
            </div>

            <div class="w4">
                <p>URL do LinkedIn</p>
                <input type="text" name="url_linkedin">
            </div>

            <div class="w4">
                <p>URL do Instagram</p>
                <input type="text" name="url_instagram">
            </div>
            </div>

            <h3>Informação do Documento</h3>
            <div class="w100">
                <div class="w4">
                    <p>Currículo</p>
                    <input type="file" name="curriculo">
                </div>

                <div class="w4">
                    <p>Carta de Admissão</p>
                    <input type="file" name="carta_admissao">
                </div>

                <div class="w4">
                    <p>Outros Documentos</p>
                    <input type="file" name="outros_documentos">
                </div>
            </div>
            <input type="hidden" name="type" value="2">

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