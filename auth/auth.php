<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" data-theme="dark" href="./styles/dark-theme.css">
    <link rel="stylesheet" href="/styles/animations.css">
    <script defer src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script defer src="./scripts/script.js"></script>
    <title>AstroSound</title>
</head>
<body>
    <header class="header">

        <div class="main-container">

            <div class="default-menu">

                <ul class="header-list">
                    <li class="header-unit"><a href="index.php">ГЛАВНАЯ</a></li>
                    <li class="header-unit"><a href="drum.php">МАШИНА</a></li>
                    <li class="header-unit"><a href="prices.php">ЦЕНЫ</a></li>
                    <li class="header-unit"><a href="contacts.php">КОНТАКТЫ</a></li>
                    <li class="header-unit"><a href="reviews.php">ОТЗЫВЫ</a></li>
                </ul>

                <ul class="header-list">
                    <?php
                        if($_SESSION['user']){
                            echo '<li class="header-unit user"><a style = "text-transform: uppercase; font-weight:700;">' . $_SESSION['user'] . '</a> <a class="exit" href="vendor/logout.php">ВЫЙТИ</a></li>';
                        } else {
                            echo '<li class="header-unit active-a"><a href="auth.php">ВХОД</a></li>';
                        }
                    ?>
                    <li class="header-unit pc-theme">ТЕМНО</li>
                </ul>

            </div>

            <div class="menu-burger">

                <input type="checkbox" id="check-menu">
                <label for="check-menu" id="label-menu">ASTROSOUND</label>

                <div class="burger-line first"></div>
                <div class="burger-line second"></div>
                <div class="burger-line third"></div>
                <div class="burger-line fourth"></div>

                <nav class="nav-burger">
                    <a href="index.php">ГЛАВНАЯ</a>
                    <a href="drum.php">МАШИНА</a>
                    <a href="prices.php">ЦЕНЫ</a>
                    <a href="contacts.php">КОНТАКТЫ</a>
                    <a href="#">ВХОД</a>
                    <a href="#" class="mob-theme">ТЕМНО</a>
                </nav>

            </div>

        </div>

    </header>

    <main class="main">

        <article class="article start_article">

            <div class="main-container fade-in">

                <div class="login-page">
                    <div class="form">
                      <form class="register-form" action="vendor/register.php" method="post">
                        <input type="text" placeholder="Логин" name="username" style="color: black"/>
                        <input type="password" placeholder="Пароль" name="password" style="color: black"/>
                        <input type="text" placeholder="Номер телефона" name="phone" style="color: black"/>
                        <button type="submit">создать</button>
                        <p class="message">Уже зарегистрированы? <a href="#">Войти</a></p>
                      </form>
                      <form class="login-form" action="vendor/login.php" method="post">
                        <input type="text" placeholder="Логин" name="login" style="color: black"/>
                        <input type="password" placeholder="Пароль" name="password" style="color: black"/>
                        <button type="submit">войти</button>
                        <p class="message">Не зарегистрированы? <a href="#">Создать аккаунт</a></p>
                        <?php
                            if($_SESSION['message']){
                                echo '<p class="warning" style="color: rgb(160, 67, 64)">' . $_SESSION['message'] . '</p>';
                                unset($_SESSION['message']);
                            }
                            if($_SESSION['success']){
                                echo '<p class="warning" style="color: rgb(64, 160, 88)">' . $_SESSION['success'] . '</p>';
                                unset($_SESSION['success']);
                            }
                        ?>
                      </form>
                    </div>
                  </div>
                
            </div>

        </article>

    </main>

    <footer class="footer">

        <div class="main-container">

            <div class="footer-cont">

                <div class="navbar">
                    <a href="index.html" class="footer-a">ГЛАВНАЯ</a>
                    <a href="#" class="footer-a">МАШИНА</a>
                    <a href="prices.html" class="footer-a">ЦЕНЫ</a>
                    <a href="contacts.html" class="footer-a">КОНТАКТЫ</a>
                </div>
                <div class="contacts">
                    <a href="" class="footer-a">TELEGRAM</a>
                    <a href="" class="footer-a">VKONTAKTE</a>
                    <a href="" class="footer-a">YOUTUBE</a>
                    <p class="footer-a">+7 (999) 835-611-33</p>
                </div>

            </div>

            <p class="footer-p">2023 © AstroSound.</p>

        </div>

    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            $('.message a').click(function(){
                $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
            });
        });
    </script>
</body>
</html>