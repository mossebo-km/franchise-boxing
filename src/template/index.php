<?php
// utm
if ( isset( $_GET[ 'utm_source' ] ) && !isset( $_COOKIE[ 'utm_source' ] ) ) setcookie( 'utm_source', $_GET[ 'utm_source' ], time()+500000, '/' );
if ( isset( $_GET[ 'utm_medium' ] ) && !isset( $_COOKIE[ 'utm_medium' ] ) ) setcookie( 'utm_medium', $_GET[ 'utm_medium' ], time()+500000, '/' );
if ( isset( $_GET[ 'utm_campaign' ] ) && !isset( $_COOKIE[ 'utm_campaign' ] ) ) setcookie( 'utm_campaign', $_GET[ 'utm_campaign' ], time()+500000, '/' );
if ( isset( $_GET[ 'utm_content' ] ) && !isset( $_COOKIE[ 'utm_content' ] ) ) setcookie( 'utm_content', $_GET[ 'utm_content' ], time()+500000, '/' );
if ( isset( $_GET[ 'utm_term' ] ) && !isset( $_COOKIE[ 'utm_term' ] ) ) setcookie( 'utm_term', $_GET[ 'utm_term' ], time()+500000, '/' );
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Упаковка франшиз</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<header class="header">
    <nav>
        <div class="blocks block-nav">
            <div class="wrap">
                <div class="flex flex-align-mid">
                    <a href="/" class="logo"></a>
                    <ul class="nav">
                        <li><a href="#about">О проекте</a></li>
                        <li><a href="#smi">СМИ о нас</a></li>
                        <li><a href="#upakovka">Упаковка франшиз</a></li>
                        <li><a href="#call">Заказать звонок</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="blocks block-video-mobile">

    </div>
    <div class="blocks block-video">
        <div class="wrap">
            <div class="block-video__desc">
                <div class="block-video__desc-title">
                    Создадим вашу<strong>франшизу</strong>
                    <span class="red-line-1"></span>
                </div>
                <div class="block-video__desc-title">
                    Продадим<strong>по всему миру</strong>
                    <span class="red-line-2"></span>
                </div>
                <div class="block-video__desc-sub-title">Владельцы Mossebo масштабировали свою компанию до международного статуса и сделают это с вашим бизнесом.</div>
                <img src="/assets/images/header-logos.png" alt="" class="block-video__desc-logos">
                <a href="#" class="button">Оставить заявку</a>
            </div>
            <div class="block-video__form">
                <div class="block-video__form-title">Оставить заявку</div>
                <form class="block-video__form-warp feedback__form">
                    <input type="hidden" value="header_form" name="form_name" hidden>
                    <input type="text" placeholder="Ваше имя" name="contact_name">
                    <input type="tel" placeholder="Ваш телефон" name="contact_phone">
                    <input type="email" placeholder="E-mail" name="contact_email">
                    <div class="block-video__form-desc">Мы гарантируем конфиденциальность<br>
                        ваших данных и защиту от спама</div>
                    <button type="submit" class="button">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</header>

<a name="about" class="animate_scroll"></a>

<div class="blocks block-wedo">
    <div class="wrap">
            <div class="title text-center">Мы сделали то,<br>о чем другие рассказывают</div>
            <div class="sub-title text-center">Хайповый бизнес – единственный проект по упаковке и продаже франшиз, который масштабирует бизнес на собственном опыте.</div>
    </div>
</div>

<div class="blocks block-bizprocess">
    <div class="wrap">
        <div class="block-bizprocess__name-item">Бизнес<br>процесс</div>
        <div class="block-bizprocess__text-item">В команде Mossebo и Хайпового бизнеса работает более 250 человек. Каждый из них точно знает, что от него нужно и как работать по точно описанному бизнес-процессу. Ваша франшиза будет работать также слаженно и прозрачно.</div>
    </div>
    <img src="/assets/images/yuri.png" alt="" class="full-width-img">
</div>

<div class="blocks block-sellfranchise">
    <div class="wrap">
        <div class="block-sellfranchise__name-item">Продажа<br>франшиз</div>
        <div class="block-sellfranchise__text-item">Никто не умеет продавать франшизы. Для успешного роста нужно понимать мотивации и возможности предпринимателей и инвесторов, создавать собственную технологию продажи для каждого бизнеса.</div>
    </div>
    <img src="/assets/images/vlad.png" alt="" class="full-width-img">
</div>

<div class="blocks block-digitalmark">
    <div class="wrap">
        <div class="block-digitalmark__name-item">Digital<br>маркетинг</div>
        <div class="block-digitalmark__text-item">Бизнес не может работать без потока входящих обращений от клиентов. Работая над вашей франшизой мы найдем и создадим точки лидогенерации и массово привлечем с них клиентов.</div>
    </div>
    <img src="/assets/images/mark.png" alt="" class="full-width-img">
</div>


<div class="blocks block-wecan">
    <div class="flex">
        <div class="col-3">
            <div class="block-wecan-text">
                <img src="/assets/images/icons/block-wecan__icon-1.png" alt="" class="block-wecan__icon">
                <div class="title">Работа по плану</div>
                <div class="sub-title">Создание и продажа франшизы бизнеса — обычное дело. Для нас это рядовая задача.</div>
            </div>
            <div class="block-wecan-photo block-wecan-photo-1">

            </div>
        </div>
        <div class="col-3 block-wecan-middle">
            <div class="block-wecan-text">
                <img src="/assets/images/icons/block-wecan__icon-2.png" alt="" class="block-wecan__icon">
                <div class="title">Выбираем лучшее</div>
                <div class="sub-title">Упаковывая часть вашего бизнеса во франшизу мы выделим нужную часть.</div>
            </div>
            <div class="block-wecan-photo block-wecan-photo-2">

            </div>
        </div>
        <div class="col-3">
            <div class="block-wecan-text">
                <img src="/assets/images/icons/block-wecan__icon-3.png" alt="" class="block-wecan__icon">
                <div class="title">Находим франчайзи</div>
                <div class="sub-title">Мы самостоятельно находим покупателей вашей франшизы.</div>
            </div>
            <div class="block-wecan-photo block-wecan-photo-3">

            </div>
        </div>
    </div>
</div>



<div class="blocks block-about">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="title">Хайповый бизнес</div>
                <div class="sub-title">Лучшее, что может произойти с вашей франшизой - появление в самом известном видео-блоге от лидеров франчайзинга. Благодаря этому сотни тысяч людей узнают о продукте лично. В первый день существования вашей франшизы.</div>
            </div>
            <div class="col-2">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/KeiH3loVx7w?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<a name="smi" class="animate_scroll"></a>

<div class="blocks block-media">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="title">Медийность</div>
                <div class="sub-title">Используя сеть наших знакомств, друзей и партнеров мы приобрели уникальные навыки развития франшиз. Используя ее же, ваша франшиза получить большую известность.</div>
            </div>
            <div class="col-2 mobile_hide">
                <div class="flex flex-align-mid">
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/1.png"
                             alt="РБК">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/2.png"
                             alt="Forbes">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/3.png"
                             alt="Капиталист">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/4.png"
                             alt="ТНТ">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/7.png"
                             alt="Аргументы и факты">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/8.png"
                             alt="MyHome">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/9.png"
                             alt="NOVATE">
                    </div>
                    <div class="col-4">
                        <img src="//mossebo.studio/wp-content/uploads/page__franchising/icons/brands/10.png"
                             alt="houzz">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blocks block-reputation">
    <div class="brand-photo">
        <div class="brand-photo-wrap">

            <div class="brand-photo-item brand-photo-item_b brand-photo__1">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__1.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__2">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__2.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__3">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__3.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__4">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__4.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__5">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__5.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__6">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__6.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__7">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__7.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__8">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__8.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__9">
                <div class="title">Репутация</div>
                <div class="sub-title">Нет никакого смысла размещаться в каталогах франшиз. Есть смысл в том, чтобы стать широко известным людям. С этого мы и начинаем маркетинг каждой франшизы.</div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__10">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__10.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__11">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__11.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__12">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__12.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__13">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__13.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_b brand-photo__14">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__14.png" alt="">
                </div>
            </div>
            <div class="brand-photo-item brand-photo-item_s brand-photo__15">
                <div class="brand-photo-item__bg">
                    <img src="/assets/images/brand-photo/logo__15.png" alt="">
                </div>
            </div>

        </div>
    </div>
</div>




<div class="blocks block-history">
    <div class="wrap">
        <div class="title">История Mossebo</div>
        <div class="sub-title">История роста от маркетинговой компании до международного лидера в сфере дизайна интерьера и упаковки франшиз</div>
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-history__list">
                    <div class="block-history__num">86</div>
                    <div class="block-history__desc">проектов</div>
                </div>
                <div class="block-history__list">
                    <div class="block-history__num">215</div>
                    <div class="block-history__desc">проектов</div>
                </div>
                <div class="block-history__list">
                    <div class="block-history__num">45/7</div>
                    <div class="block-history__desc">филлиалов &nbsp;&nbsp;&nbsp; стран</div>
                </div>
            </div>
            <div class="col-2">
                <div class="block-history__list2">
                    <div class="block-history__year">2012</div>
                    <div class="block-history__event">Начало работы Маркетинг Mossebo</div>
                </div>
                <div class="block-history__list2">
                    <div class="block-history__year">2014</div>
                    <div class="block-history__event">Старт Mossebo дизайн-интерьера</div>
                </div>
                <div class="block-history__list2">
                    <div class="block-history__year">2015</div>
                    <div class="block-history__event">Открытые франшизы Mossebo</div>
                </div>
                <div class="block-history__list2">
                    <div class="block-history__year">2017</div>
                    <div class="block-history__event">Старт Хайпового Бизнеса</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blocks block-history-2">
    <div class="wrap">
        <div class="title">История Mossebo</div>
        <div class="sub-title">Научившись продавать свадебные платья через интернет и раскрутив свадебного франчайзера мы начали свой путь. Сегодня мы - крупнейший в мире франчайзинговый бренд по дизайну интерьера МОССЭБО</div>
    </div>
    <img src="/assets/images/history.png" alt="" class="block-history-2__gallery mobile_hide">
    <img src="/assets/images/history_mobile.png" alt="" class="block-history-2__gallery mobile_show">
</div>

<a name="upakovka" class="animate_scroll"></a>

<div class="blocks block-step">
    <div class="wrap">
        <div class="title">Что входит в упаковку франшизы?</div>
    </div>
</div>

<div class="blocks block-step block-step-1">
    <img src="/assets/images/step-1.svg" alt="" class="block-step-1-svg">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">1</div>
                <div class="block-step__name">Бизнес <br>процессы</div>
                <div class="block-step__text">
                    - глубокий аудит вашего бизнеса<br><br>
                    - формализация внутренних и внешних
                    бизнес-процессов<br><br>
                    - составление пошаговых инструкции для
                    персонала и франчайзингового отдела
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-1.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>




<div class="blocks block-step block-step-2">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">2</div>
                <div class="block-step__name">Экономическая<br>модель</div>
                <div class="block-step__text">
                    - анализ показателей вашего бизнеса<br><br>
                    - построение модели продаж на основе
                    статистики и расчет инвестиций<br><br>
                    - создание модели развития каждого филиала
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-2.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>

<div class="blocks block-step block-step-3">
    <img src="/assets/images/step-3.svg" alt="" class="block-step-3-svg">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">3</div>
                <div class="block-step__name">Маркетинговое<br>продвижение</div>
                <div class="block-step__text">
                    - анализ показателей вашего бизнеса<br><br>
                    - построение модели продаж на основе
                    статистики и расчет инвестиций<br><br>
                    - создание модели развития каждого филиала
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-3.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>

<div class="blocks block-step block-step-4">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">4</div>
                <div class="block-step__name">Обучение</div>
                <div class="block-step__text">
                    - обучаем персонал работе с клиентом<br><br>
                    - обучаем франчайзи работе с персоналом<br><br>
                    - обучаем вас работе с франчайзи
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-4.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>

<div class="blocks block-step block-step-5">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">5</div>
                <div class="block-step__name">Юристы</div>
                <div class="block-step__text">
                    - разработка документации для продажи
                    франшизы<br><br>
                    - разработка документация для работы
                    с клиентами<br><br>
                    - регистрация товарного знака
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-5.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>

<div class="blocks block-step block-step-6">
    <img src="/assets/images/step-1.svg" alt="" class="block-step-6-svg">
    <div class="wrap">
        <div class="flex flex-align-mid">
            <div class="col-2">
                <div class="block-step__number">6</div>
                <div class="block-step__name">Дизайн</div>
                <div class="block-step__text">
                    - анализ показателей вашего бизнеса<br><br>
                    - построение модели продаж на основе
                    статистики и расчет инвестиций<br><br>
                    - создание модели развития
                    каждого филиала
                </div>
            </div>
            <div class="col-2">
                <img src="/assets/images/step-6.png" alt="" class="block-step__photo">
            </div>
        </div>
    </div>
</div>





<div class="blocks block-map">
    <div class="wrap">
        <div class="title">По всему миру</div>
        <div class="sub-title">Ваш бизнес может работать во всех странах мира.<br>Мы поможем масштабировать его</div>
    </div>
    <div class="interactive-map">
        <img src="/assets/images/map.png" alt="">
    </div>
</div>

<a name="call" class="animate_scroll"></a>

<div class="blocks block-feedback-header">
    <div class="wrap">
        <div class="title">Мы будем звонить вам</div>
        <div class="sub-title">и задавать вам много вопросов.<br>
            Затем скажем, сколько времени и денег вам нужно на развитие своей франшизы</div>
    </div>
</div>

<div class="blocks block-feedback">
    <div class="wrap">
        <form class="block-feedback__form feedback__form_footer">
            <input type="hidden" value="footer_form" name="form_name" hidden>
            <input type="text" placeholder="Ваше имя" name="contact_name">
            <input type="tel" placeholder="Ваш телефон" name="contact_phone">
            <button type="submit" class="button">Отправить</button>
        </form>
    </div>
</div>





<footer class="footer">
    <nav>
        <div class="blocks block-nav">
            <div class="wrap">
                <div class="flex flex-align-mid">
                    <ul class="nav">
                        <li><a href="#about">О проекте</a></li>
                        <li><a href="#smi">СМИ о нас</a></li>
                        <li><a href="#upakovka">Упаковка франшиз</a></li>
                        <li><a href="#call">Заказать звонок</a></li>
                    </ul>
                    <a href="/" class="logo"></a>
                    <div class="social-icons mobile_show">
                        <a href=""><img src="/assets/images/icons/vk.png" alt=""></a>
                        <a href=""><img src="/assets/images/icons/fb.png" alt=""></a>
                        <a href=""><img src="/assets/images/icons/in.png" alt=""></a>
                        <a href=""><img src="/assets/images/icons/you.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="blocks block-copyright">
        <div class="wrap">
            <div class="flex flex-align-mid">
                <div class="block-copyright__text">
                    Copyright © 2017 MOSSEBO<br>
                    Политика конфиденциальности | Защита персональных данных<br>
                    Информация на сайте не является публичной офертой
                </div>
                <div class="social-icons mobile_hide">
                    <a href=""><img src="/assets/images/icons/vk.png" alt=""></a>
                    <a href=""><img src="/assets/images/icons/fb.png" alt=""></a>
                    <a href=""><img src="/assets/images/icons/in.png" alt=""></a>
                    <a href=""><img src="/assets/images/icons/you.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script async src="/assets/js/app.js"></script>
</body>
</html>
