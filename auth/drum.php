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
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script defer src="./scripts/script.js"></script>
    <script defer src="./scripts/mpc.js"></script>
    <title>AstroSound</title>
</head>
<body>
    <header class="header">

        <div class="main-container">

            <div class="default-menu">

                <ul class="header-list">
                    <li class="header-unit"><a href="index.php">ГЛАВНАЯ</a></li>
                    <li class="header-unit active-a"><a href="#">МАШИНА</a></li>
                    <li class="header-unit"><a href="prices.php">ЦЕНЫ</a></li>
                    <li class="header-unit"><a href="contacts.php">КОНТАКТЫ</a></li>
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

    <main class="main">

        <article class="article start_article">

            <div class="main-container">

                <div class="drum-info">
                    <h2 class="drum-h ">DRUM-MACHINE</h2>
                    <p class="drum-p flicker-in-1">
                        MPC2500 sports a 100,000-note, 64-track sequencer that can be assigned 
                        to four different MIDI outputs for a total of 64 independently addressable 
                        MIDI channels. Internal sounds reside in flash memory and can easily 
                        be swapped out via Compact Flash cards, an optional hard drive, or an 
                        optional CD-ROM drive. A CF card with preloaded sounds is included to get you started.
                    </p>
                </div>

                <div class="drum_wrapper roll-in-blurred-left">

                    <div class="modes">
                        <div class="mode_1 mode"></div>
                        <div class="mode_2 mode"></div>
                        <div class="mode_3 mode"></div>
                        <div class="mode_4 mode"></div>
                    </div>

                    <div class="board">
                        <div class="key_row">
                            <div class="key_1 key" id="pad1"></div>
                            <div class="key_2 key" id="pad2"></div>
                            <div class="key_3 key" id="pad3"></div>
                            <div class="key_4 key" id="pad4"></div>
                        </div>
                        <div class="key_row">
                            <div class="key_1 key" id="pad5"></div>
                            <div class="key_2 key" id="pad6"></div>
                            <div class="key_3 key" id="pad7"></div>
                            <div class="key_4 key" id="pad8"></div>
                        </div>
                        <div class="key_row">
                            <div class="key_1 key" id="pad9"></div>
                            <div class="key_2 key" id="pad10"></div>
                            <div class="key_3 key" id="pad11"></div>
                            <div class="key_4 key" id="pad12"></div>
                        </div>
                        <div class="key_row">
                            <div class="key_1 key" id="pad13"></div>
                            <div class="key_2 key" id="pad14"></div>
                            <div class="key_3 key" id="pad15"></div>
                            <div class="key_4 key" id="pad16"></div>
                        </div>
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
</body>
</html>