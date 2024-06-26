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
    <link rel="stylesheet" href="./styles/owl.carousel.min.css">
    <link rel="stylesheet" href="./styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="/styles/animations.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
    <script defer src="./scripts/owl.carousel.min.js"></script>
    <script defer src="./scripts/owl.js"></script>
    <script defer src="./scripts/script.js"></script>

    <title>AstroSound</title>
</head>
<body>
    <header class="header">

        <div class="main-container">

            <div class="default-menu">

                <ul class="header-list ">
                    <li class="header-unit active-a"><a href="">ГЛАВНАЯ</a></li>
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
                            echo '<li class="header-unit"><a href="auth.php">ВХОД</a></li>';
                        }
                    ?>
                    <li class="header-unit pc-theme">ТЕМНО</li>
                </ul>

            </div>

            <div class="menu-burger">

                <div class="burger-line first"></div>
                <div class="burger-line second"></div>
                <div class="burger-line third"></div>
                <div class="burger-line fourth"></div>

                <input type="checkbox" id="check-menu">
                <label for="check-menu" id="label-menu">ASTROSOUND</label>

                <nav class="nav-burger">
                    <a href="#">ГЛАВНАЯ</a>
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

        <article class="article">

            <div class="home">
                <img src="./img/header_bcg.png" alt="studio" class="bcg-img ">
            </div>

        </article>

        <article class="article">

            <div class="main-container">
                
                <div class="container">

                    <div class="start-work">
                        <h2 class="article-h">КАК НАЧАТЬ С НАМИ РАБОТАТЬ?</h2>
                        <p class="article-p">
                            Чтобы подписать контракт с нашим лейблом, 
                            вам нужно зарегистрироваться на нашем сайте, 
                            записаться на встречу со специалистом оценки, 
                            посетить наш офис для личной беседы и ожидать 
                            ответа от службы оценки.
                        </p>
                    </div>
    
                    <div class="table-article">
                        <div class="column">

                            <div class="cell">
                                <h2 class="h2">#1</h2>
                                <p class="article-p">РЕГИСТРАЦИЯ</p>
                            </div>
                            <div class="cell">
                                <h2 class="h2">#2</h2>
                                <p class="article-p">ОЖИДАЙТЕ ЗВОНКА</p>
                            </div>
                            <div class="cell">
                                <h2 class="h2">#3</h2>
                                <p class="article-p">ПРИШЛЕМ ОТВЕТ НА ПОЧТУ</p>
                            </div>

                        </div>
                        <div class="column">

                            <div class="cell">
                                <h2 class="h2">#4</h2>
                                <p class="article-p">ПРИГЛАШЕНИЕ В ОФИС</p>
                            </div>
                            <div class="cell">
                                <h2 class="h2">#5</h2>
                                <p class="article-p">ОБСУЖДЕНИЕ ДЕТАЛЕЙ</p>
                            </div>
                            <div class="cell">
                                <h2 class="h2">#6</h2>
                                <p class="article-p">ПОЗДРАВЛЯЕМ</p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>

        </article>

        <article class="article">

            
            <div class="main-container">
                
                <h2 class="article-h service-h">НАШИ КЛИЕНТЫ</h2>

                <div class="artist-cont">
                    
                    <div class="artist">
                        <img class="img_artist" src="./img/noize-mc.png" alt="Noize MC">
                        <p class="article-p artist-p">NOIZE MC</p>
                    </div>
                    <div class="artist">
                        <img class="img_artist" src="./img/atl.png" alt="Noize MC">
                        <p class="article-p artist-p">ATL</p>
                    </div>
                    <div class="artist">
                        <img class="img_artist" src="./img/scrip.png" alt="Scryptonite">
                        <p class="article-p artist-p">СКРИПТОНИТ</p>
                    </div>

                </div>

            </div>

        </article>

        <article class="article">

            <div class="main-container">

                <div class="container">

                    <div class="reason_wrapper">

                        <div class="reason">

                            <h2 class="reason-h">ПРОДВИЖЕНИЕ МУЗЫКИ</h2>
                            <p class="reason-p">
                                Ваша музыка будет не только обожаемой среди 
                                всех слушателей, но и будет приносить вам доход 
                                и играть на будущее.
                            </p>

                        </div>

                        <div class="reason">

                            <h2 class="reason-h">СОЗДАНИЕ УЗНАВАЕМОГО БРЕНДА</h2>
                            <p class="reason-p">
                                Вы хотели узнаваемости? Вы ее получите, спустя год 
                                о вас будет знать в сотни раз больше людей.
                            </p>

                        </div>

                        <div class="reason">

                            <h2 class="reason-h">ВЫГОДНЫЕ УСЛОВИЯ СОТРУДНИЧЕСТВА</h2>
                            <p class="reason-p">
                                Вы максимально быстро ощутите насколько выгодно с нами работать.
                            </p>

                        </div>

                    </div>

                    <div class="fotorama" 
                        data-loop="true"
                        data-keyboard="true">

                        <img class="rap" src="./img/rapper1.png" alt="rapper">
                        <img class="rap" src="./img/rapper2.png" alt="rapper">
                        <img class="rap" src="./img/rapper3.png" alt="rapper">

                    </div>

                </div>

            </div>

        </article>

        <article class="article">

            <div class="main-container">

                <h2 class="article-h service-h">НАШИ УСЛУГИ</h2>

                <div class="service-cont">

                    <div class="service_wrapper">

                        <h2 class="service-h">СВЕДЕНИЕ</h2>
                        <p class="service-p">
                            Стадия создания из отдельных треков конечной записи, 
                            этап создания фонограммы после записи.
                        </p>
                        <a href="" class="service-a">ПОДРОБНЕЕ</a>

                    </div>
                    <div class="service_wrapper">

                        <h2 class="service-h">ГОСТРАЙТИНГ</h2>
                        <p class="service-p">
                            Написание текстов на заказ. Будь то рекламный текст, текст для веб-страницы, 
                            пресс-релиз, письмо или презентация.
                        </p>
                        <a href="" class="service-a">ПОДРОБНЕЕ</a>

                    </div>
                    <div class="service_wrapper">

                        <h2 class="service-h">МАСТЕРИНГ</h2>
                        <p class="service-p">
                            Процесс подготовки и переноса записанной и сведённой записи на 
                            носитель для последующего тиражирования.
                        </p>
                        <a href="" class="service-a">ПОДРОБНЕЕ</a>

                    </div>

                </div>

            </div>

        </article>

        <article class="article">

            <h2 class="article-h service-h">НАШИ АРТИСТЫ</h2>

            <div class="owl-carousel">
                <div class="hero-carousel__slide">
                  <img src="./img/rapper4.png" alt="dyson" >
                </div>
                <div class="hero-carousel__slide">
                  <img src="./img/rapper3.png" alt="" >
                </div>
                <div class="hero-carousel__slide">
                  <img src="./img/rapper2.png" alt="" >
                </div>
                <div class="hero-carousel__slide">
                  <img src="./img/rapper1.png" alt="" >
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
                    <a href="#" class="footer-a">ГЛАВНАЯ</a>
                    <a href="drum.html" class="footer-a">МАШИНА</a>
                    <a href="prices.html" class="footer-a">ЦЕНЫ</a>
                    <a href="contacts.html" class="footer-a">КОНТАКТЫ</a>
                </div>
                <div class="contacts">
                    <a href="" class="footer-a">TELEGRAM</a>
                    <a href="https://vk.com/frvyz" class="footer-a">VKONTAKTE</a>
                    <a href="" class="footer-a">YOUTUBE</a>
                    <p class="footer-a">+7 (999) 835-611-33</p>
                </div>

            </div>

            <p class="footer-p">2023 © AstroSound.</p>

        </div>

    </footer>
</body>
</html>