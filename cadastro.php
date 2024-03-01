<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>DuEDUCA</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Dueduca, FlavysonFelipe">
    <meta name="Description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/c49e0b56e6.js" crossorigin="anonymous"></script>
</head>
<body>
    <section>
        <div class="opacity"></div>
            <aside class="one">
                <div class="container">
                    <div class="title">
                        <h1>Bem Vindo</h1>
                        <h3>Crie sua Conta</h3>
                    </div>
                    <div class="lineStar">
                        <div class="line"></div>
                        <div class="star"><img src="assets/images/Star 1.png" alt=""></div>
                        <div class="line"></div>
                    </div>
                    <div class="end">
                        <a href="login.php"><button>Fazer Login</button></a><br><br>
                        <a href="">Duvidas? Fale Conosco</a>
                        <div class="lineStar" style="width: 30%;">
                            <div class="icon"><img src="assets/images/whatsapp.png" alt=""></div>
                            <div class="text"><p>ou</p></div>
                            <div class="icon"><img src="assets/images/google.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </aside>
            <div class="btn">
                <a href="login.php">
                    <button><img src="assets/images/vetor.png" alt=""></button>
                </a>
            </div>
            <aside class="two">
                <div class="container">
                    <div class="logo" style="margin-top: 20px;">
                        <img src="assets/images/logo2.png" alt="">
                        <h1>Cadastre-se</h1>
                    </div>
                    <?php
                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            $status = $_GET["status"];
                            switch($status){
                                case 1:
                                    echo "Login Realizado com Sucesso!";
                                    break;

                                case 2:
                                    echo "Ja existe um Usuario com Esse Email";
                                    break;

                                case 3:
                                    echo "Ja existe um Usuario com Esse CPF";
                                    break;

                            }
                        }
                    ?>
                    <form action="src/Models/Cadastro.php" method="post" enctype="multipart/form-data">
                        <div class="w100">
                            <div class="inputs">
                                <img src="assets/images/user2.png" alt="">
                                <input type="text" name="nome" placeholder="Nome...">
                            </div>
                        </div>
                        <div class="w100">
                            <div class="inputs">
                                <img src="assets/images/mail.png" alt="">
                                <input type="text" name="email" placeholder="Email...">
                            </div>
                        </div>
                        <div class="w100">
                            <div class="inputs">
                                <img src="assets/images/padlock.png" alt="">
                                <input type="password" name="senha" placeholder="Senha...">
                            </div>
                        </div>
                        <div class="w100">
                            <div class="inputs">
                                <img src="assets/images/telephone.png" alt="">
                                <input type="text" name="telefone" placeholder="Telefone...">
                            </div>
                        </div>
                        <div class="w100">
                            <div class="inputs">
                                <img src="assets/images/padlock.png" alt="">
                                <input type="text" name="cpf" placeholder="cpf...">
                            </div>
                        </div>


                        <div class="w100s" style="margin-top: -20px;">
                            <input type="hidden" name="type" value="1">
                            <button type="submit" name="acao">Entrar</button>
                        </div>
                    </form>
                </div>
            </aside>
    </section>
</body>
</html>

listar tipo:


1 - Admin
2 - Funcionario
3 - Aluno
4 - Pai