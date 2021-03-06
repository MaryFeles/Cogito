<?php
include 'ajax/getReview.php';
?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cogito</title>
    <!-- normalize.css нужен для кроссбраузерной верстки -->
    <link rel="icon" href="img/favicon.svg">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/magnific.popup.min.css">
    <link type="text/css" href="css/main.css?<?php echo time(); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Cogito</title>
</head>

<body class="page">
    <a class="scrollup"></a>
    <header class="header">
        <div class="container header__container">
            <div class="header__inner">
                <div class="logo header__logo">
                    <div class="logo__wrap">
                        <img class="logo__img" src="img/logo.png" alt="">
                    </div>
                </div>
                <div class="header__col">
                    <div class="header__row header__row_adres">
                        <span class="text">г. Маркс, проспект Ленина, 27</span>
                    </div>
                    <div class="header__row header__row_contacts header-contacts">
                        <a class="header-contacts__item header-contacts__item_phone_first" href="tel:+79271231131">+7 (927) 123 1131,</a>
                        <a class="header-contacts__item header-contacts__item_phone_second" href="tel:+79271574477">+7 (927) 157 4477</a>
                        <a class="header-contacts__item header-contacts__item_email" href="#">cogito-centre2014@yandex.ru</a>
                    </div>
                    <div class="header__row header__row_menu">

                        <nav class="menu">
                            <ul class="menu__list">
                                <span class="menu__plus">+</span>
                                <!-- <li class="menu__item"><a class="menu__link" id="btn_tohead" href="#id-header">Главная</a></li> -->
                                <li class="menu__item"><a class="menu__link" href="#id-courses">Курсы</a></li>
                                <!-- <li class="menu__item"><a class="menu__link" href="#">Цены</a></li> -->
                                <li class="menu__item"><a class="menu__link" href="#id-about">О нас</a></li>
                                <!-- <li class="menu__item"><a href="#">Галерея</a></li> -->
                                <li class="menu__item"><a class="menu__link" href="#id-ach">Достижения</a></li>
                                <li class="menu__item"><a class="menu__link" href="#id-reviews">Отзывы</a></li>
                                <!-- <li class="menu__item"><a href="#">Вакансии</a></li> -->
                                <li class="menu__item"><a class="menu__link" id="btn_contacts" href="#id-contacts">Контакты</a></li>
                            </ul>
                            <span class="menu__hamb"></span>
                            <div class="overlay"></div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="slider">
        <div class="container slider__container">
            <div class="slider__inner">
                <div class="slider__item">
                    <div class="slider__content">
                        <img class="slider__img" src="img/notice1.jpg" alt="">
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__content">
                        <img class="slider__img" src="img/notice1.jpg" alt="">
                    </div>
                </div>
                <div class="slider__item">
                    <div class="slider__content">
                        <img class="slider__img" src="img/notice1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="id-courses">
        <div class="container courses__container">
            <h1 class="title courses__title">НАШИ КУРСЫ</h1>
            <div class="courses__inner content">
                <div class="courses__card courses__card_english card">
                    <h2 class="title card__title">Английский язык</h2>
                    <div class="card__wrap-list">
                        <ul class="card__list">
                            <li class="card__item">Курсы углубленного изучения языка</li>
                            <li class="card__item">Подготовка к ОГЭ и ЕГЭ по английскому языку</li>
                            <li class="card__item">Подготовка к международным экзаменам Cambridge English</li>
                        </ul>
                    </div>
                    <span class="card__footnote footnote">Занятия в группах и индивидуально, а также онлайн формат</span>
                    <!-- <a class="card__btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="courses__card courses__card_rusmath card">
                    <h2 class="title card__title card__title_rusmath">Русский язык и математика</h2>
                    <h4 class="subtitle card__subtitle card__subtitle_rusmath">для начальной школы</h4>
                    <div class="card__wrap-list">
                        <ul class="card__list">
                            <li class="card__item">Помощь в изучении школьной программы</li>
                            <li class="card__item">Подготовка к ВПР</li>
                        </ul>
                    </div>
                    <span class="card__footnote footnote">Индивидуальные занятия</span>
                    <!-- <a class="card__btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="courses__card courses__card_club card">
                    <h2 class="title card__title">Разговорный клуб</h2>
                    <div class="card__wrap-list">
                        <ul class="card__list">
                            <li class="card__item">Speak Out для детей и взрослых</li>
                            <li class="card__item">Только разговорный английский</li>
                        </ul>
                    </div>
                    <span class="card__footnote footnote">Для любого уровня (даже с нуля)</span>
                    <!-- <a class="card__btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="courses__card card courses__card_podgotovka">
                    <h2 class="title card__title">Подготовка к школе</h2>
                    <div class="card__wrap-list">
                        <ul class="card__list">
                            <li class="card__item">Научим дошкольников всему необходимому для обучения в школе</li>
                        </ul>
                    </div>
                    <!-- <a class="cards__btn btn" href="#">Подробнее</a> -->
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="id-about">
        <div class="container about__container">
            <h1 class="title about__title">О НАС</h1>
            <div class="about__inner content">
                <div class="about__wrap-text">
                    <p class="about__text text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non debitis pariatur maxime corporis sequi iusto sed, laboriosam minima itaque cumque cupiditate, doloremque voluptates qui quo totam ipsam id accusamus assumenda.</p>
                    <p class="about__text text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum aut impedit eos laboriosam consectetur, recusandae ratione a at voluptates in amet placeat iusto repellat molestiae sapiente aliquid consequuntur nihil ex ipsam delectus asperiores praesentium repellendus aperiam distinctio! Sint odio incidunt nulla, asperiores sed alias veniam, ipsa quibusdam dolorem optio ut!</p>
                </div>
                <div class="about__wrap-img">
                    <img src="img/people2.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="achievements" id="id-ach">
        <div class="container achievements__container">
            <h1 class="title achievements__title">НАШИ ДОСТИЖЕНИЯ</h1>
            <div class="achievements__inner content">
                <p class="achievements__text text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio dolor aspernatur fugit quidem ad cupiditate tenetur laborum, doloribus molestiae iusto suscipit minima minus dolore, incidunt impedit sit illo dignissimos recusandae!</p>
                <p class="achievements__text text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim eaque sapiente numquam quia rerum blanditiis commodi temporibus, nisi repellat libero magni, obcaecati inventore voluptatem deserunt natus sit fugit eveniet repudiandae magnam. Nostrum dignissimos debitis doloribus optio dolore voluptates nisi, aut, quis esse error voluptatum. Eum doloribus quae nostrum. Vel, vero obcaecati. Ea ducimus incidunt vitae omnis adipisci! Consequatur, sunt illum.</p>
                <div class="achievements__wrap-item">
                    <div class="achievements__item"><span class="number">57</span> <span class="lead"> обучающихся сдали ЕГЭ по английскому<br>
                            языку более чем на 80 баллов</span></div>
                    <div class="achievements__item"><span class="number">1</span><span class="lead"> обучающийся сдал международный<br>
                            экзамен Cambridge English</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="id-reviews">
        <div class="container reviews__container">
            <h1 class="title reviews__title">ОТЗЫВЫ</h1>
            <div class="review__wrap-content">
                <div class="reviews__inner content">

                    <?php $arrRev = get_reviews(); ?>
                    <?php if (count($arrRev) === 0) : ?>
                        <span>Ошибка!!</span>
                    <?php else : ?>
                        <?php for ($i = 0; $i < count($arrRev); ++$i) : ?>

                            <div class="reviews__item item">

                                <div class="reviews__data review-data" <?= $i ?>">
                                    <div class="client-name"><?= $arrRev[$i]["c_name"], ' ', $arrRev[$i]["c_middlename"], ' ', $arrRev[$i]["c_secondname"] ?></div>
                                    <div class="review-text"><?= $arrRev[$i]["c_review"] ?></div>
                                    <div class="review-date"><?= $arrRev[$i]["c_date"] ?></div>
                                </div>

                            </div>
                        <?php endfor; ?>
                    <?php endif; ?>
                </div>
                <a class="reviews__btn btn call-popup" href="#popup-form" data-effect="mfp-zoom-in">Оставить отзыв</a>
            </div>
        </div>
    </section>
    <section class="contacts" id="id-contacts">
        <div class="container contacts__container">
            <div class="contacts__inner content">
                <div class="contacts__holder contacts__holder_phones item">
                    <h3 class="contacts__title contacts__title-phones">Телефоны:</h3>
                    <a class="contacts__phone" href="tel:+79271231131">+7 (927) 123 1131</a>
                    <a class="contacts__phone" href="tel:+79271574477">+7 (927) 157 4477</a>
                </div>
                <div class="contacts__holder contacts__holder_adres item">
                    <h3 class="contacts__title contacts__title-adres">Адрес:</h3>
                    <span class="contacts__adres">г. Маркс, проспект Ленина, 27</span>
                </div>
                <div class="contacts__holder contacts__holder_email item">
                    <h3 class="contacts__title contacts__title-email">Email:</h3>
                    <a href="#" class="contacts__email">cogito-centre2014@yandex.ru</a>
                </div>
                <div class="contacts__holder contacts__holder_socials item">
                    <h3 class="contacts__title contacts__title-socials socials">Мы в соцсетях:</h3>
                    <a class="socials__link socials__link_vk" href="https://vk.com/id94959271" title="ВКонтакте"></a>
                    <a class="socials__link socials__link_inst" href="https://instagram.com/cogito_centre" title="Инстаграмм"></a>
                    <!-- <a class="socials__link socials__link_ok" href="#" title="Одноклассники"></a> -->
                </div>
                <div class="contacts__holder contacts__holder_locate item">
                    <div class="contacts__wrap-locate locate_min">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ada6dfdeb753b8668a14314fa95684ea34c52871d1790b6d76427df0a9202e377&amp;width=320&amp;height=260&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="popup-form" class="popup mfp-with-anim mfp-hide">
        <form class="review-form" id="form_input" action="#" method="POST">
            <label class="review-form__label" for="name">Имя<span class="symbol">*</span></label><br>
            <input class="review-form__input" type="text" placeholder="Введите имя" name="name" id="name"><br>
            <label class="review-form__label" for="middlename">Отчество</label><br>
            <input class="review-form__input" type="text" placeholder="Введите отчество" name="middlename" id="middlename"><br>
            <label class="review-form__label" for="secondname">Фамилия</label><br>
            <input class="review-form__input" type="text" placeholder="Введите фамилию" name="secondname" id="secondname"><br>
            <label class="review-form__label" for="email">Ваша почта<span class="symbol">*</span></label><br>
            <input class="review-form__input" type="email" placeholder="Введите email" name="email" id="email"><br>
            <label class="review-form__label" for="review">Отзыв<span class="symbol">*</span></label><br>
            <textarea class="review-form__textarea" placeholder="Введите ваш отзыв" name="review" id="review"></textarea><br>
            <span class="review-form__footnote footnote">Поля, отмеченные звездочкой, обязательны для заполнения</span><br>
            <button type="button" id="send_review" class="btn review-form__btn">Отправить</button>
        </form>
        <div class="box-error" id="box-error"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/magnific.popup.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>
    <!-- <script type="text/javascript" src="js/main.js"></script> -->

</body>

</html>