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
                    <li class="header-unit active-a"><a href="#">ЦЕНЫ</a></li>
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

    <main class="main fade-in">

        <article class="article start_article">

            <div class="main-container">

                <table class="table">
                    <thead>
                        <tr class="table-stroke">
                            <td class="table-cell">ЦЕНЫ</td>
                            <td class="table-cell">С ПРОДЮСИРОВАНИЕМ</td>
                            <td class="table-cell">БЕЗ ПРОДЮСИРОВАНИЯ</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-stroke">
                            <td class="table-cell">СТОИМОСТЬ ЗАПИСИ ВОКАЛА ЗА ЧАС</td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                        </tr>
                        <tr class="table-stroke">
                            <td class="table-cell">ЗАПИСЬ СТУДИЙНОГО АЛЬБОМА</td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                        </tr>
                        <tr class="table-stroke">
                            <td class="table-cell">СОЧИНЕНИЕ ОРИГИНАЛЬНОЙ АВТОРСКОЙ МУЗЫКИ</td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                            <td class="table-cell"><span class="price-line">2000</span> <span class="color-text">РУБ.</span></td>
                        </tr>
                    </tbody>
                </table>

                <form action="" class="text-form">

                    <div class="form_wrapper">

                        <div class="input_wrapper">

                            <div class="checkbox_wrapper">
                                <input type="checkbox" class="checkbox" id="service_1">
                                <label for="service_1">Запись вокала</label>
                            </div>
    
                            <div class="radios">
    
                                <div class="radio_wrapper">
                                    <p><input type="radio" class="radio" id="service_1__with" name="service_1" value="with" checked> С продюсированием</p>
                                    <p><input type="radio" class="radio" id="service_1__out" name="service_1" value="out"> Без продюсирования</p>
                                </div>
                                <div class="number_wrapper">
                                    <label for="hours">Количество часов:</label>
                                    <input type="number" id="hours" min="1" max="15">
                                </div>
        
                            </div>
                        </div>
                        <div class="input_wrapper">
    
                            <div class="checkbox_wrapper">
                                <input type="checkbox" class="checkbox" id="service_1">
                                <label for="service_1">Запись студийного альбома</label>
                            </div>
    
                            <div class="radios">
    
                                <div class="radio_wrapper">
                                    <p><input type="radio" class="radio" id="service_1__with" name="service_2" value="with" checked> С продюсированием</p>
                                    <p><input type="radio" class="radio" id="service_1__out" name="service_2" value="out"> Без продюсирования</p>
                                </div>
        
                            </div>
                        </div>
                        <div class="input_wrapper">
    
                            <div class="checkbox_wrapper">
                                <input type="checkbox" class="checkbox" id="service_1">
                                <label for="service_1">Сочинение авторской музыки</label>
                            </div>
    
                            <div class="radios">
    
                                <div class="radio_wrapper">
                                    <p><input type="radio" class="radio" id="service_1__with" name="service_3" value="with" checked> С продюсированием</p>
                                    <p><input type="radio" class="radio" id="service_1__out" name="service_3" value="out"> Без продюсирования</p>
                                </div>
        
                            </div>
                        </div>

                    </div>

                    <div class="text_wrapper">

                        <div class="input-text">
                            <input type="text" id="input-name" class="input-name" placeholder="ИМЯ">
                            <input type="tel" id="input-tel" class="input-tel" placeholder="ТЕЛЕФОН">
                        </div>
                        <textarea name="question" id="input-area" class="input-area" rows="7" placeholder="ВАШ ВОПРОС..."></textarea>
                        <button type="submit" class="submit-button">ОТПРАВИТЬ</button>

                    </div>

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