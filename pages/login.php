<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HUB INNOVATION II</title>

    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body class="tela-login">
    <header class="header ">
        <nav class="navbar ">
            <ul class="nav-menu ">
                <li class="nav-item ">
                    <a href="index.php " class="nav-link ">HOME</a>
                </li>
                <li class="nav-item ">
                    <a href="index.html" class="nav-link ">SOBRE</a>
                </li>
                <li class="nav-item ">
                    <a href="index.html" class="nav-link ">EDIÇÕES</a>
                </li>
                <li class="nav-item ">
                    <a href="index.html" class="nav-link ">PALESTRANTES</a>
                </li>
                <li class="nav-item ">
                    <a href="inscricao.php" class="nav-link ">INSCRIÇÕES</a>
                </li>
                <li class="nav-item ">
                    <a href="login.php " class=" nav-link ">LOGIN</a>
                </li>
            </ul>
            <div class="hamburger ">
                <span class="bar "></span>
                <span class="bar "></span>
                <span class="bar "></span>
            </div>
        </nav>

    </header>

    <section class="container">
        <div class="container-login">
            <img src="../logos com efeitos/logo_hub-innovation-2023_completa-com-efeitos.png" alt="Carregando...." id="logo-login">
            <div class="wrap-login">
                <form class="login-form">
                    <span class="login-form-title">
                        LOGIN
                    </span>
                    <div class="wrap-input margin-top-35 margin-bottom-35">
                        <input type="email" name="email" class="input-form" autocomplete="off">
                        <span class="focus-input-form" data-placeholder="Email"></span>
                    </div>
                    <div class="wrap-input margin-bottom-35">
                        <input type="password" name="senha" class="input-form">
                        <span class="focus-input-form" data-placeholder="Senha"></span>
                    </div>
                    <div class="container-login-form-btn">
                        <button class="login-form-btn">
                            LOGAR
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </section>





    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }



        const navLink = document.querySelectorAll(".nav-link");

        navLink.forEach(n => n.addEventListener("click", closeMenu));

        function closeMenu() {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
        }
    </script>

</body>

</html>