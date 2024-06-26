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
                    <li class="header-unit active-a"><a href="#">КОНТАКТЫ</a></li>
                    <li class="header-unit"><a href="reviews.php">ОТЗЫВЫ</a></li>
                </ul>

                <ul class="header-list">
                    <?php
                        if($_SESSION['user']){
                            echo '<li class="header-unit user"><a style = "text-transform: uppercase; font-weight:700;">' . $_SESSION['user'] . '</a> <a class="exit" href="vendor/logout.php">ВЫЙТИ</a></li>';
                        } else {
                            echo '<li class="header-unit"><a href="auth.php">ВХОД</a></li>';
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

    <main class="main fade-in">

        <article class="article start_article">

            <div class="main-container">

                <div class="info_wrapper">

                    <div class="map_wrapper">
                        <!-- <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A6a76cefd8a4ecaa3185a5ba3efbdad285a917df5bb451e4c670026da603871c1&amp;width=720&amp;height=720&amp;lang=en_FR&amp;scroll=true"></script> -->
                        <iframe class="map" src="https://yandex.com/map-widget/v1/?um=constructor%3A6a76cefd8a4ecaa3185a5ba3efbdad285a917df5bb451e4c670026da603871c1&amp;source=constructor" width="450" height="450" frameborder="0"></iframe>
                    </div>
    
                    <div class="contact-info">
    
                        <div class="info-h">
                            <h2 class="article-h">КОНТАКТЫ</h2>
                            <p class="article-p">
                              Ниже представлены способы связи с нами:
                            </p>
                        </div>
    
                        <div class="info">
    
                            <img src="./img/tg-dark.png" class="icon" alt="tg-icon">
                            <p class="reason-p"><a href="#" class>TELEGRAM</a></p>
    
                        </div>
                        <div class="info">
    
                            <img src="./img/vk-dark.png" class="icon" alt="vk-icon">
                            <p class="reason-p"><a href="#" class>VKONTAKTE</a></p>
    
                        </div>
                        <div class="info">
    
                            <img src="./img/youtube-dark.png" class="icon" alt="yt-icon">
                            <p class="reason-p"><a href="#" class>YOUTUBE</a></p>
    
                        </div>
                        <div class="info">
    
                            <img src="./img/mail-dark.png" class="icon" alt="mail-icon">
                            <p class="reason-p"><a href="#">INFO@ASTROSOUND.RU</a></p>
    
                        </div>

                </div>

            </div>

        </article>

        <article class="article">

            <div class="main-container">

                <h2 class="article-h service-h">ЕСТЬ ВОПРОСЫ?</h2>
                <p class="article-p service-p form-p">Заполните форму, отправьте анкету и ожидайте ответа!</p>

                <form action="" class="text-form">

                    <div class="input-text">
                        <input type="text" id="input-name" class="input-name" placeholder="ИМЯ">
                        <input type="tel" id="input-tel" class="input-tel" placeholder="ТЕЛЕФОН">
                    </div>
                    <textarea name="question" id="input-area" class="input-area" rows="7" placeholder="ВАШ ВОПРОС..."></textarea>
                    <button type="submit" class="submit-button">ОТПРАВИТЬ</button>

                </form>

            </div>

        </article>

    </main>

    <footer class="footer">

        <div class="main-container">

            <div class="footer-cont">

                <div class="navbar">
                    <a href="index.html" class="footer-a">ГЛАВНАЯ</a>
                    <a href="drum.html" class="footer-a">МАШИНА</a>
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
</body>
</html>