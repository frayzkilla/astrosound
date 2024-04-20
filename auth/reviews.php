<?php
    session_start();

    require_once 'vendor/connect.php';

    $revs = mysqli_query($connect, "SELECT * FROM `reviews`");


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
                    <li class="header-unit"><a href="drum.php">МАШИНА</a></li>
                    <li class="header-unit"><a href="prices.php">ЦЕНЫ</a></li>
                    <li class="header-unit"><a href="contacts.php">КОНТАКТЫ</a></li>
                    <li class="header-unit active-a"><a href="#">ОТЗЫВЫ</a></li>
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
            <?php
            
                if($_SESSION['message']){
                    echo '<p class="warning" style="color: rgb(160, 67, 64)">' . $_SESSION['message'] . '</p>';
                    unset($_SESSION['message']);
                }
                            
            ?>

            <div class="main-container">

                
                    <?php
                        while ($row = mysqli_fetch_row($revs)) {
                            echo '  <div class="review">
                                        <div class="review-h">'. $row[1] . '</div>
                                        <div class="review-p">' . $row[2] . '</div>
                                    </div>';
                        }
                    ?>
                

                

            </div>

        </article>
        
        <article class="article" style="margin-top: -140px;">
                <div class="reviews-input-wrapper">
                    <form action="vendor/addReview.php" method="post" class="text-form review-form">
                        <textarea name="content" class="input-area" rows="7" cols="45" placeholder="ВАШ ОТЗЫВ..."></textarea>
                        <button type="submit" class="submit-button">Оставить отзыв</button>
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