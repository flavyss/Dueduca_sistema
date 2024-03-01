<?php
    $nomeCompleto = isset($_SESSION["nome"]) ? $_SESSION["nome"] : '';
    $partesDoNome = preg_split('/\s+/', trim($nomeCompleto));
    $primeiroNome = isset($partesDoNome[0]) ? $partesDoNome[0] : '';
?>
<header>
    <div class="container">
        <div class="logo">
            <img src="assets/images/logo2.png" alt="">
        </div>

        <nav class="menuDesktop">
            <ul>
                <li><a href=""><img src="assets/images/chate.png" alt=""></a></li>
                <li><a href=""><img src="assets/images/notificationd.png" alt=""></a></li>
                <li>
                    <a href="" class="perfil">
                        <div class="description">
                            <h3><?php echo $primeiroNome;?></h3>
                            <div class="status"><p>Online</p><div class="ball"></div></div>
                        </div>
                        <img src="assets/images/useru.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="menuMobile">
            <ul>
                <li><a href=""><img src="assets/images/chate.png" alt=""></a></li>
                <li><a href=""><img src="assets/images/notificationd.png" alt=""></a></li>
                <li>
                    <a href="" class="perfilll">
                        <div class="description">
                            <h3><?php echo $primeiroNome;?></h3>
                            <div class="status"><p>Online</p><div class="ball"></div></div>
                        </div>
                        <img src="assets/images/useru.png" alt="">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>