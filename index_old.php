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
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/magnific.popup.min.css">
    <link type="text/css" href="css/style.css?<?php echo time();?>" rel="stylesheet"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>

<body>
    <a href="#" class="scrollup"></a>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="#">
                        <img src="img/logo2.png" alt="">
                    </a>
                </div>
                <div class="header-content">
                    <div class="wrap-header-adres">
                        <span class="header-adres">г. Маркс, проспект Ленина, 27</span>
                    </div>
                    <div class="wrap-header-contacts">
                        <div class="header-contacts">
                            <a href="tel:+79271231131" class="header-phone first">+7 (927) 123 1131,</a>
                            <a href="tel:+79271574477" class="header-phone second">+7 (927) 157 4477</a>
                            <a href="#" class="header-email">cogito-centre2014@yandex.ru</a>
                        </div>
                    </div>
                    <div class="wrap-header-menu">
                        <nav class="menu">
                            <ul class="menu-list">
                                <span class="plus">+</span>
                                <li><a href="#id-header">Главная</a></li>
                                <li><a href="#id-courses">Курсы</a></li>
                                <!-- <li><a href="#">Цены</a></li> -->
                                <li><a href="#id-about">О нас</a></li>
                                <!-- <li><a href="#">Галерея</a></li> -->
                                <li><a href="#id-ach">Достижения</a></li>
                                <li><a href="#id-reviews">Отзывы</a></li>
                                <!-- <li><a href="#">Вакансии</a></li> -->
                                <li><a id="btn_contacts" href="#id-contacts">Контакты</a></li>
                            </ul>
                            <span class="hamb"></span>
                            <span class="overlay"></span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="slider">
        <div class="container">
            <div class="slider-inner">
                <div class="slider-item">
                    <div class="slider-item-content">
                        <img src="img/notice1.jpg" alt="" class="notice">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item-content">
                        <img src="img/notice1.jpg" alt="" class="notice">
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-item-content">
                        <img src="img/notice1.jpg" alt="" class="notice">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="courses" id="id-courses">
        <div class="container">
            <h1>НАШИ КУРСЫ</h1>
            <div class="courses-cards-inner">
                <div class="card preschoolers">
                    <div class="card-preview"></div>
                    <h2>Английский язык</h2>
                    <div class="subjects-list">
                        <ul>
                            <li>Курсы углубленного изучения языка</li>
                            <li>Подготовка к ОГЭ и ЕГЭ по английскому языку</li>
                            <li>Подготовка к международным экзаменам Cambridge English</li>
                        </ul>
                    </div>
                    <span class="footnote">Занятия в группах и индивидуально, а также онлайн формат</span>
                    <!-- <a class="courses_btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="card schoolers">
                    <div class="card-preview"></div>
                    <h2>Русский язык и математика</h2>
                    <h4>для начальной школы</h4>
                    <div class="subjects-list">
                        <ul>
                            <li>Помощь в изучении школьной программы</li>
                            <li>Подготовка к ВПР</li>
                        </ul>
                    </div>
                    <span class="footnote">Индивидуальные занятия</span>
                    <!-- <a class="courses_btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="card adults">
                    <div class="card-preview"></div>
                    <h2>Разговорный клуб</h2>
                    <div class="subjects-list">
                        <ul>
                            <li>Speak Out для детей и взрослых</li>
                            <li>Только разговорный английский</li>
                        </ul>
                    </div>
                    <span class="footnote">Для любого уровня (даже с нуля)</span>
                    <!-- <a class="courses_btn btn" href="#">Подробнее</a> -->
                </div>
                <div class="card podgotovka">
                    <div class="card-preview"></div>
                    <h2>Подготовка к школе</h2>
                    <div class="subjects-list">
                        <ul>
                            <li>Научим дошкольников всему необходимому для обучения в школе</li>
                        </ul>
                    </div>
                    <!-- <a class="courses_btn btn" href="#">Подробнее</a> -->
                </div>
            </div>
            <!-- <span class="footnote">* Занятия в мини-группах и индивидуально</span> -->
        </div>
    </section>
    <section class="about" id="id-about">
        <div class="container">
            <div class="about-inner-content">
                <h1>О НАС</h1>
                <div class="about-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non debitis pariatur maxime corporis sequi iusto sed, laboriosam minima itaque cumque cupiditate, doloremque voluptates qui quo totam ipsam id accusamus assumenda.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum aut impedit eos laboriosam consectetur, recusandae ratione a at voluptates in amet placeat iusto repellat molestiae sapiente aliquid consequuntur nihil ex ipsam delectus asperiores praesentium repellendus aperiam distinctio! Sint odio incidunt nulla, asperiores sed alias veniam, ipsa quibusdam dolorem optio ut!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="achievements" id="id-ach">
        <div class="container">
            <h1>НАШИ ДОСТИЖЕНИЯ</h1>
            <div class="achievements-inner">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio dolor aspernatur fugit quidem ad cupiditate tenetur laborum, doloribus molestiae iusto suscipit minima minus dolore, incidunt impedit sit illo dignissimos recusandae!</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim eaque sapiente numquam quia rerum blanditiis commodi temporibus, nisi repellat libero magni, obcaecati inventore voluptatem deserunt natus sit fugit eveniet repudiandae magnam. Nostrum dignissimos debitis doloribus optio dolore voluptates nisi, aut, quis esse error voluptatum. Eum doloribus quae nostrum. Vel, vero obcaecati. Ea ducimus incidunt vitae omnis adipisci! Consequatur, sunt illum.</p>
                <div class="achievements-items-inner">
                    <div class="achievements-item"><span class="number">57</span> <span class="text"> обучающихся сдали ЕГЭ по английскому<br>
                            языку более чем на 80 баллов</span></div>
                    <div class="achievements-item"><span class="number">1</span><span class="text"> обучающийся сдал международный<br>
                            экзамен Cambridge English</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews" id="id-reviews">
        <div class="container">
            <h1>ОТЗЫВЫ</h1>
            <div class="review-inner">
                 <?php $arrRev = get_reviews(); ?>   
                 <?php if(count($arrRev) === 0): ?>
                    <span>Ошибка!!</span>
                 <?php else: ?>
                    <?php    for($i=0; $i < count($arrRev); ++$i): ?>
                
                    <div class="review-item item<?=$i?>">
                        <div class="client-name"><?=$arrRev[$i]["c_name"],' ',$arrRev[$i]["c_middlename"],' ',$arrRev[$i]["c_secondname"]?></div>
                        <div class="review-text"><?=$arrRev[$i]["c_review"]?></div>
                        <div class="review-date"><?=$arrRev[$i]["c_date"]?></div>
                    </div>
                    <?php endfor; ?>
                    <?php endif; ?>
                <!-- <div class="review-item">
                    <div class="client-name">Александра</div>
                    <div class="review-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nemo atque odit aliquid harum hic excepturi, quia omnis asperiores commodi.
                    </div>
                    <div class="review-date">11.11.2020</div>
                </div>
                <div class="review-item">
                    <div class="client-name">Вера</div>
                    <div class="review-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos ratione nostrum eum similique ut. Provident sit quasi, exercitationem minima incidunt voluptas illo, repellat vel necessitatibus ad dolorem voluptatem eligendi numquam esse sint quos aspernatur iste cumque eaque ipsa culpa doloremque dolor. Possimus molestias illum quia alias laborum, dolore id ex.
                    </div>
                    <div class="review-date">22.11.2020</div>
                </div>
                <div class="review-item">
                    <div class="client-name">Виктория</div>
                    <div class="review-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ratione iure quisquam inventore fugit, maxime sint provident, illum odio sed labore amet sapiente. Suscipit tenetur quidem fugiat excepturi similique minus.
                    </div>
                    <div class="review-date">31.11.2020</div>
                </div> -->
            </div>
            <a class="review_btn btn show-popup" href="#form-popup" data-effect="mfp-zoom-in">Оставить отзыв</a>
        </div>
    </section>
    <section class="contacts" id="id-contacts">
        <div class="container">
            <div class="contacts-inner">
                <div class="wrap-contacts-phones item">
                    <h3>Телефоны:</h3>
                    <a href="tel:+79271231131" class="contacts-phone first">+7 (927) 123 1131</a>
                    <a href="tel:+79271574477" class="contacts-phone second">+7 (927) 157 4477</a>
                </div>
                <div class="wrap-contacts-adres item">
                    <h3>Адрес:</h3>
                    <span class="contacts-adres">г. Маркс, проспект Ленина, 27</span>
                </div>
                <div class="wrap-contacts-email item">
                    <h3>Email:</h3>
                    <a href="#" class="contacts-email">cogito-centre2014@yandex.ru</a>
                </div>
                <div class="wrap-contacts-social item">
                    <h3>Мы в соцсетях:</h3>
                    <a class="vk" href="#" title="Инстаграмм"></a>
                    <a class="inst" href="#" title="ВКонтакте"></a>
                    <a class="ok" href="#" title="Одноклассники"></a>
                </div>
                <div class="wrap-locate item">
                    <div class="first-locate">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ada6dfdeb753b8668a14314fa95684ea34c52871d1790b6d76427df0a9202e377&amp;width=400&amp;height=260&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <div class="second-locate">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ada6dfdeb753b8668a14314fa95684ea34c52871d1790b6d76427df0a9202e377&amp;width=320&amp;height=260&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="form-popup" class="white-popup mfp-with-anim mfp-hide">
        <form id="form_input" action="" method="POST">
            <label for="name">Имя<span class="symbol">*</span></label><br>
            <input type="text" placeholder="Введите имя" name="name" id="name"><br>
            <label for="middlename">Отчество</label><br>
            <input type="text" placeholder="Введите отчество" name="middlename" id="middlename"><br>
            <label for="secondname">Фамилия</label><br>
			<input type="text" placeholder="Введите фамилию" name="secondname" id="secondname"><br>
			<label for="email">Ваша почта<span class="symbol">*</span></label><br>
			<input type="email" placeholder="Введите email" name="email" id="email"><br>
			<label for="review">Отзыв<span class="symbol">*</span></label><br>
            <textarea placeholder="Введите ваш отзыв" name="review" id="review"></textarea><br>
            <span class="form-footnote">Поля, отмеченные звездочкой, обязательны для заполнения</span><br>
			<button type="button" id="send_review" class="btn form-btn">Отправить</button>			
        </form>
        <div id="errorMess"></div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/magnific.popup.min.js"></script>
    <script type="text/javascript" src="js/main.min.js"></script>

</body>

</html>
