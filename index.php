<?php
    require_once("./php/connect.php");
    $sql = "SELECT * FROM reviews";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarWash</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/media.css">
    <link rel="stylesheet" href="./style/button-up.css">
    <link rel="stylesheet" href="./style/popup.css">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="header__nav">
                <a href="index.php" class="header__logo"><img src="./img/logo/logo.png" alt="CarWash"></a>
                <nav class="header__nav-list">
                    <ul>
                        <li><a href="#broadcasts">Онлайн-трансляции </a></li>
                        <li><a href="#price">Цены</a></li>
                        <li><a href="#package">Пакеты</a></li>
                        <li><a href="#stocks">Акции</a></li>
                        <li><a href="#about-us">О нас</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#contacts">Контакты</a></li>

                    </ul>
                </nav>
            </div>
            <div class="header__slider">
                <div class="item">
                    <div class="item__content">
                        CarWash - лучшая туннельная <br> автомойка в Омске. <br> Работаем быстро и качественно <br> 24 часа в сутки.
                    </div>
                </div>
                <div class="item">
                    <div class="item__content">
                        У нас вы можете отслеживать <br> загруженность автомойки и качество <br> выполнения работ в режиме прямой <br> онлайн-трансляции.
                    </div>
                </div>
            </div>
            <div class="header__desc">
                <div class="paragraph">
                    <div class="before"></div>
                    <p>
                        24/7
                    </p>
                </div>
                <div class="paragraph">
                    <div class="before"></div>
                    <p>
                        Современные <br> технологии
                    </p>
                </div>
                <div class="paragraph">
                    <div class="before"></div>
                    <p>
                        Любая <br> форма оплаты
                    </p>
                </div>
            </div>
            <a href="#price">
                <div class="header__button-price">
                    Узнать стоимость
                </div>
            </a>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div id="broadcasts" class="container__id"></div>
            <h1 class="element-animation line line-first">CarWash Онлайн</h1>
            <div class="main__address">
                <p>
                    Выберите нужный адресс мойки :
                </p>
                <div class="main__address-selection">
                    <div class="first-address">
                        <a href="#!">
                            ул. Конева 18
                        </a>
                    </div>
                    <div class="second-address">
                        <a href="#!">
                            ул. Лукашевича 14/6
                        </a>
                    </div>
                </div>
            </div>
            <div class="main__broadcasts">
                <div class="camera">
                    <img src="./img/broadcasts/video.png" alt="camera">
                    <div class="camera__name">
                        Очередь на въезд
                    </div>
                </div>
                <div class="camera">
                    <img src="./img/broadcasts/video.png" alt="camera">
                    <div class="camera__name">
                        Продолжение очередь на въезд
                    </div>
                </div>
                <div class="camera">
                    <img src="./img/broadcasts/video.png" alt="camera">
                    <div class="camera__name">
                        Зал сушки и уборки автомобиля
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="price" class="container__id"></div>
            <h1 class="element-animation line">Цены на мойку авто</h1>
            <div class="price-list">
                <div class="price-card">
                    <div class="price-img">
                        <img src="./img/price/price-img.png" alt="">
                    </div>
                    <h2 class="divider"><span>Эконом</span></h2>
                    <div class="price">
                        400 руб.
                    </div>
                    <div class="price-text">
                        Хотите очистить свой автомобиль, то Вам необходим данный вид услуги.
                    </div>
                    <a href="#!">
                        <div class="button-more">
                            <p>Подробнее &#129042;</p>
                        </div>
                    </a>
                </div>
                <div class="price-card">
                    <div class="price-img">
                        <img src="./img/price/price-img.png" alt="">
                    </div>
                    <h2 class="divider"><span>Стандарт</span></h2>
                    <div class="price">
                        500 руб.
                    </div>
                    <div class="price-text">
                        Хотите очистить свой автомобиль, то Вам необходим данный вид услуги.
                    </div>
                    <a href="#!">
                        <div class="button-more">
                            <p>Подробнее &#129042;</p>
                        </div>
                    </a>
                </div>
                <div class="price-card">
                    <div class="price-img">
                        <img src="./img/price/price-img.png" alt="">
                    </div>
                    <h2 class="divider"><span>Максимум</span></h2>
                    <div class="price">
                        650 руб.
                    </div>
                    <div class="price-text">
                        Хотите очистить свой автомобиль, то Вам необходим данный вид услуги.
                    </div>
                    <a href="#!">
                        <div class="button-more">
                            <p>Подробнее &#129042;</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="package" class="container__id"></div>
            <h1 class="element-animation line">Выгодные пакетные решения</h1>
            <div class="package-list">
                <div class="package-card">
                    <div class="title">
                        <h2 class="divider"><span>Эконом - 10</span></h2>
                    </div>
                    <img src="./img/package/01.png" alt="">
                    <div class="content">
                        <p>
                            При предоплате 10 моек по программе Эконом - 10
                        </p>
                        <p>
                            5 чисток ковриков или уборок багажника в подарок (500 бонусов на Вашу депозитную карту)
                        </p>
                    </div>
                </div>
                <div class="package-card">
                    <div class="title">
                        <h2 class="divider"><span>Эконом - 10</span></h2>
                    </div>
                    <img src="./img/package/02.png" alt="">
                    <div class="content">
                        <p>
                            При предоплате 10 моек по программе Стандарт - 10
                        </p>
                        <p>
                            5 чисток ковриков или уборок багажника в подарок (500 бонусов на Вашу депозитную карту)
                        </p>
                    </div>
                </div>
                <div class="package-card">
                    <div class="title">
                        <h2 class="divider"><span>Эконом - 10</span></h2>
                    </div>
                    <img src="./img/package/03.png" alt="">
                    <div class="content">
                        <p>
                            При предоплате 10 моек по программе Максимум - 10
                        </p>
                        <p>
                            5 чисток ковриков или уборок багажника в подарок (500 бонусов на Вашу депозитную карту)
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="stocks" class="container__id"></div>
            <h1 class="element-animation line">Акции</h1>
            <div class="swiper">
                <div class="swiper__tape">
                    <div class="swiper__image-container accent">
                        <button class="swiper__button swiper__prev"></button>
                        <button class="swiper__button swiper__next"></button>
                        <img src="./img/slide/slide.png" alt="" class="swiper__image">
                    </div>
                    <div class="swiper__image-container">
                        <button class="swiper__button swiper__prev"></button>
                        <button class="swiper__button swiper__next"></button>
                        <img src="./img/slide/slide.png" alt="" class="swiper__image">
                    </div>
                    <div class="swiper__image-container">
                        <button class="swiper__button swiper__prev"></button>
                        <button class="swiper__button swiper__next"></button>
                        <img src="./img/slide/slide.png" alt="" class="swiper__image">
                    </div>
                    <div class="swiper__image-container">
                        <button class="swiper__button swiper__prev"></button>
                        <button class="swiper__button swiper__next"></button>
                        <img src="./img/slide/slide.png" alt="" class="swiper__image">
                    </div>
                </div>
                <div class="swiper__counter">
                    <div class="swiper__dot"></div>
                    <div class="swiper__dot"></div>
                    <div class="swiper__dot"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="about-us" class="container__id"></div>
            <h1 class="element-animation line">О нас</h1>
            <div class="about-us">
                <div class="about-us__title">CarWash</div>
                <div class="about-us__content">
                    <div class="about-us__text">
                        <p>
                            Это моечный комплекс нового поколения, состоящий из ряда модулей, по которым автомобили передвигаются с помощью специального транспортера.
                        </p>
                        <p>
                            Благодаря современным технологиям мойка автомобиля в "CarWash" займёт всего 5 минут и сохранит наш бюджет.
                        </p>
                    </div>
                    <div class="about-us__logo">
                        <img src="./img/about_us/logo.png" alt="">
                    </div>
                </div>
            </div>
            <div class="main__desc">
                <div class="paragraph">
                    <p>
                        15+
                    </p>
                    <p>
                        лет опыта и совершенствования
                    </p>
                </div>
                <div class="paragraph">
                    <p>
                        100+
                    </p>
                    <p>
                        специалистов - наша гордость и главный ресурс
                    </p>
                </div>
                <div class="paragraph">
                    <p>
                        20 000+
                    </p>
                    <p>
                        довольных клиентов каждый месяц
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="reviews" class="container__id"></div>
            <h1 class="element-animation line">Отзывы</h1>
            <div class="reviews__container">
                <div class="reviews__list">
                <?php
                    foreach ($reviews as $review) {
                        echo '<h1>' . $review['name'] . '</h1>';
                        echo '<h2>' . $review['text'] . '</h2>';
                    }
                ?>
                </div>
                <form action="./php/create_review.php" class="reviews__form" method="post">
                    <input type="text" class="name" name="name" placeholder="Ваше имя">
                    <textarea name="review" class="review" rows="10" placeholder="Ваш отзыв"></textarea>
                    <input type="submit" class="button-submit" value="Оставить отзыв">
                </form>
            </div>
        </div>
        <div class="container">
            <div id="contacts" class="container__id"></div>
            <h1 class="element-animation line">Контакты</h1>
            <div class="contacts">
                <div class="contacts__info">
                    <div class="contacts__info-addresses">
                        <p>Адреса:</p>
                        <p>ул. Конева, 18</p>
                        <p>ул. Лукашевича, 14/6</p>
                    </div>
                    <div class="contats__info-working-hours">
                        <p>Время работы:</p>
                        <p class="before">Ежедневно 24 часа</p>
                    </div>
                    <div class="contacts__info-break">
                        <p>Перерыв:</p>
                        <p>01:00 - 04:00 Пн-Чт</p>
                    </div>
                    <div class="contacts__info-button">
                        <a href="tel:+73812955055">
                            <div class="button-call button">
                                <p>8 (000) 000-0000</p>
                            </div>
                        </a>
                        <a href="https://vk.com/CarWash" target="_blank">
                            <div class="social-button">
                                <p>CarWash ВКонтакте</p>
                            </div>
                        </a>
                        <a href="mailto:955055@bk.ru">
                            <div class="button-email button">
                                <p>000000@bk.ru</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="contacts__map">
                    <div class="map">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aaa18175ac962ad628ed54ad3072a97ea2cb03090424f95c0bc8cfcddb034ce93&amp;source=constructor" width="892" height="742" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__logo">
                <img src="./img/about_us/logo.png" alt="">
            </div>
            <div class="footer__info">
                <p>Все права защищены.</p>
                <p>ООО «CarWash55» ОГРН 0000000000000 ИНН 0000000000</p>
            </div>
            <div class="footer__dev">
                Сайт запустили:
            </div>
        </div>
        <div class="btn-up btn-up_hide"></div>
    </footer>

    <div class="popup-wrapper">
        <div class="popup">
            <span class="close">&#10006;</span>
            <div class="popup__content">
                <h1 class="popup__title">
                    Информация об услуге
                </h1>
                <p class="popup__text">
                    Предварительная мойка 1-фазный автошампунь Арки высокого давления Мойка автоматизированными щетками Сушка турбовентиляторами
                </p>
            </div>
        </div>
    </div>


    <script src="./js/main.js"></script>
    <script src="./js/swiper.js"></script>
    <script src="./js/button-up.js"></script>
    <script src="./js/animation-title.js"></script>
    <script src="./js/popup.js"></script>

</body>

</html>