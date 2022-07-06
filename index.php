<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:regular,500,600,700,800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/static/css/flickity.css">
    <title>DevUP - современные решения</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">

                <div class="header__social">
                    <div class="social__list">
                        <a href="mailto:TeamDevUp@gmail.com" class="social__item">
                            <img class="social__img" src="/static/img/social/gmail.svg" alt="gmail">
                        </a>
                        <a href="" class="social__item">
                            <img class="social__img" src="/static/img/social/instagram.svg" alt="instagram">
                        </a>
                        <a href="https://t.me/devup322" class="social__item">
                            <img class="social__img" src="/static/img/social/telegram.svg" alt="telegram">
                        </a>
                    </div>
                </div>

                <a href="" class="header__logo">
                    DevUP
                </a>
                <nav class="header__menu menu">
                    <ul class="menu__list menu">
                        <li class="menu__item">
                            <a href="#whoweare" class="menu__link">кто мы</a>
                        </li>
                        <li class="menu__item">
                            <a href="#ourwork" class="menu__link">как мы работаем</a>
                        </li>
                        <li class="menu__item">
                            <a href="#portfolio" class="menu__link">портфолио</a>
                        </li>
                        <li class="menu__item">
                            <a href="#team" class="menu__link">команда</a>
                        </li>
                        <li class="menu__item">
                            <a href="#faq" class="menu__link">вопросы</a>
                        </li>
                        <li class="menu__item">
                            <a href="#order" class="menu__link">сделать заказ</a>
                        </li>
                    </ul>
                </nav>

                <div class="header__burger">
                    <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
                    <label for="openSidebarMenu" class="sidebarIconToggle">
                        <div class="spinner diagonal part-1"></div>
                        <div class="spinner horizontal"></div>
                        <div class="spinner diagonal part-2"></div>
                    </label>
                    <div id="sidebarMenu">
                        <ul class="sidebarMenuInner">
                            <li>
                                <a href="#whoweare"">кто мы</a>
                            </li>
                            <li>
                                <a href=" #ourwork">как мы работаем</a>
                            </li>
                            <li>
                                <a href="#portfolio">портфолио</a>
                            </li>
                            <li>
                                <a href="#team">команда</a>
                            </li>
                            <li>
                                <a href="#faq">вопросы</a>
                            </li>
                            <li>
                                <a href="#order">сделать заказ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <main class="page">
            <div class="page__main-block main-block">
                <img class="background__img-main-block background__img background__img1" src="/static/img/background/1.svg"
                    alt="">
                <img class="background__img-main-block background__img background__img2" src="/static/img/background/2.svg"
                    alt="">
                <img class="background__img-main-block background__img background__img3" src="/static/img/background/3.svg"
                    alt="" style="left: 80%; top: 450px; max-width: 147px;">
                <div class="main-block__container _container">
                    <div class="main-block__body">
                        <img src="/static/img/main/main.jpg" alt="main" class="main-block__img">
                        <div class="main-block__content">
                            <h1 class="main-block__title">
                                Студия web-разработок Dev.UP
                            </h1>
                            <div class="main-block__text">
                                Наша студия web-разработок, готова взяться за ваш проект и реализовать самые смелые
                                решения, а также подобрать индивидуальный подход к каждой поставленной задаче.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="page__whoweare whoweare" id="whoweare">
                <img class="background__img background__img4" src="/static/img/background/4.svg" alt="">
                <div class="whoweare__container _container">
                    <div class="whoweare__body">
                        <div class="whoweare__content">
                            <div class="whoweare__header header-block">
                                <h2 class="header__block__title">кто мы такие?</h2>
                            </div>
                            <div class="whoweare__text">
                                <p>DevUP - команда опытных узкопрофильных специалистов, которые отвечают каждый за
                                    свой сегмент.</p>
                                <p>Это позволяет реализовывать проекты с минимальными затратами времени и по оптимальным
                                    ценам. Также это обеспечивает качество конечного продукта, готового к продвижению на
                                    просторах сети Интернет.</p>
                            </div>
                        </div>
                        <div class="whoweare__content-img">
                            <img src="/static/img/whoweare/whoweare.jpg" alt="whoweare" class="whoweare__img">
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__advantages advantages" id="advantages">
                <img class="background__img background__img5" src="/static/img/background/5.svg" alt="">
                <div class="advantages__container _container">
                    <div class="advantages__body">
                        <div class="advantages__header">
                            <h2 class="advantages__title">
                                почему нужно выбрать<br>
                                <span class="advantages__title-span">Именно нас?</span>
                            </h2>
                            <div class="advantages__text">
                                Потому что только мы даем гарантию качества, которая устроит каждого,
                                <span class="advantages__text-span">без сомнения!</span>
                            </div>
                        </div>
                        <div class="advantages__items">
                            <div class="advantages__item">
                                <div class="advantages__item-img">
                                    <img src="/static/img/whoweare/advantages/1.jpg" alt="responsibility"
                                        class="advantages__img">
                                </div>
                                <div class="advantages__item-content">
                                    <div class="avantages__item-title">
                                        Ответственность
                                    </div>
                                    <div class="advantages__item-text">
                                        Вам нужна команда ответственных людей, которые выполняют работу вовремя?
                                        Мы работаем именно так: прозрачно, с выполнением всех обязательств и в
                                        установленные сроки.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages__item">
                                <div class="advantages__item-img">
                                    <img src="/static/img/whoweare/advantages/2.jpg" alt="feedback" class="advantages__img">
                                </div>
                                <div class="advantages__item-content">
                                    <div class="avantages__item-title">
                                        Обратная связь
                                    </div>
                                    <div class="advantages__item-text">
                                        Стремимся информировать заказчика о развитии проекта, вносим правки,
                                        консультируем. Мы всегда на связи.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages__item">
                                <div class="advantages__item-img">
                                    <img src="/static/img/whoweare/advantages/3.jpg" alt="idea" class="advantages__img">
                                </div>
                                <div class="advantages__item-content">
                                    <div class="avantages__item-title">
                                        Обоснованная идея
                                    </div>
                                    <div class="advantages__item-text">
                                        Наша веб-студия работает без посредников, все работы выполняем сами, поэтому
                                        стоимость наших услуг ниже, чем в агентствах, и мы их объясняем.
                                    </div>
                                </div>
                            </div>
                            <div class="advantages__item">
                                <div class="advantages__item-img">
                                    <img src="/static/img/whoweare/advantages/4.jpg" alt="profy" class="advantages__img">
                                </div>
                                <div class="advantages__item-content">
                                    <div class="avantages__item-title">
                                        Профессионализм
                                    </div>
                                    <div class="advantages__item-text">
                                        Наша веб-студия по созданию сайтов работает со специалистами по всей стране.
                                        Полученный опыт позволяет нам гарантировать профессиональное выполнение задач.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__ourwork ourwork" id="ourwork">
                <img class="background__img background__img6" src="/static/img/background/6.svg" alt="">
                <img class="background__img background__img7" src="/static/img/background/7.svg" alt=""
                    style="left: 90%; top: 3517px; max-width: 133px;">
                <img class="background__img background__img8" src="/static/img/background/8.svg" alt=""
                    style="left: 85%; top: 3726px; max-width: 39px;">
                <div class="ourwork__container _container">
                    <div class="ourwork__header header-block">
                        <h2 class="header-block__title">
                            Как мы работаем:<br> <span class="ourwork-title__span">Этапы выполнения</span>
                        </h2>
                    </div>
                    <div class="ourwork__body">
                        <div class="ourwork__items">
                            <div class="ourwork__item">
                                <div class="ourwork__item-header">
                                    <img src="/static/img/ourwork/numbers/1.svg" alt="1" class="ourwork__img">
                                    <div class="ourwork__item-title">
                                        Первый контакт
                                    </div>
                                </div>
                                <div class="ourwork__content">
                                    При первом обращении в нашу студию веб-разработки сайтов мы: <br>
                                    Выслушаем ваши пожелания и идеи о проекте. <br>
                                    Обсудим с Вами задачи сайта и стратегии их решения. <br>
                                    Предложим варианты. <br>
                                    Оценим стоимость проекта и утвердим смету.
                                </div>
                            </div>
                            <div class="ourwork__item">
                                <div class="ourwork__item-header">
                                    <img src="/static/img/ourwork/numbers/2.svg" alt="2" class="ourwork__img">
                                    <div class="ourwork__item-title">
                                        Создание прототипа
                                    </div>
                                </div>
                                <div class="ourwork__content">
                                    Для визуализации внешнего вида сайта мы подготовим прототипы основных страниц. <br>
                                    Прототип – эскиз страницы сайта со схематичным отображением всех элементов. <br>
                                    Прототип легко корректируется, поэтому его удобно использовать, чтобы вы могли
                                    оценить внешнюю структуру страницы, согласовать концепцию до начала работы над
                                    проектом.

                                </div>
                            </div>
                            <div class="ourwork__item">
                                <div class="ourwork__item-header">
                                    <img src="/static/img/ourwork/numbers/3.svg" alt="3" class="ourwork__img">
                                    <div class="ourwork__item-title">
                                        Создание дизайна
                                    </div>
                                </div>
                                <div class="ourwork__content">
                                    Корпоративный стиль, шрифт, цвет – все это учитывается при подготовке полноценного
                                    дизайна. <br>
                                    Для создания сайтов наша web-студия продумает понятный и эффективный
                                    интерфейс. В результате вы получите красивый и функциональный дизайн сайта.
                                </div>
                            </div>
                            <div class="ourwork__item">
                                <div class="ourwork__item-header">
                                    <img src="/static/img/ourwork/numbers/4.svg" alt="4" class="ourwork__img">
                                    <div class="ourwork__item-title">
                                        Разработка
                                    </div>
                                </div>
                                <div class="ourwork__content">
                                    Мы выполняем верстку, программируем сайт и его компоненты, настраиваем их. <br>
                                    Производим настройку CMS (системы управления).
                                    Делаем адаптивную верстку, чтобы ресурс адекватно отображался на мобильных
                                    устройствах. <br>
                                    Программируем функционал сайта.
                                    Настраиваем конфигурации безопасности.

                                </div>
                            </div>
                            <div class="ourwork__item">
                                <div class="ourwork__item-header">
                                    <img src="/static/img/ourwork/numbers/5.svg" alt="5" class="ourwork__img">
                                    <div class="ourwork__item-title">
                                        Запуск сайта
                                    </div>
                                </div>
                                <div class="ourwork__content">
                                    Разработанный сайт согласовывается с Вами, утверждается, после чего наша веб-студия
                                    приступает к «финальным штрихам»: <br>
                                    Переносим сайт на хостинг. <br>
                                    Подключает домен. <br>
                                    Настраивает системы аналитики. <br>
                                    Ваш сайт работает и приносит доход!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__portfolio portfolio" id="portfolio">
                <img class="background__img-portfolio background__img background__img9" src="/static/img/background/9.svg"
                    alt="" style="left: 80%;
                top: 4491px; max-width: 113px;">
                <img class="background__img-portfolio background__img" src="/static/img/background/10.svg" alt="" style="left: -20%;
                top: 5000px; max-width: 853px;">
                <img class="background__img-portfolio background__img" src="/static/img/background/11.svg" alt="" style="left: 10%;
                top: 5883px; max-width: 73px;">
                <div class="portfolio__container _container">
                    <div class="portfolio__header header-block">
                        <h2 class="header-block__title">Портфолио нашей команды </h2>
                    </div>
                    <div class="portfolio__body">
                        <div class="portfolio__gallery">
                            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                                <div class="gallery-cell">
                                    <div class="gallery__content">
                                        <a href="http://9ba58a6x.plp7.ru/">
                                            <img src="/static/img/gallery/cherchil.png" alt="cherchil" class="gallery__img">
                                        </a>
                                    </div>
                                </div>
                                <div class="gallery-cell">
                                    <div class="gallery__content">
                                        <img src="/static/img/gallery/BonBon.jpg" alt="bonbon" class="gallery__img">
                                    </div>
                                </div>
                                <div class="gallery-cell">
                                    <div class="gallery__content">
                                        <a href="https://miorimi.ru/">
                                            <img src="/static/img/gallery/miori.png" alt="miori" class="gallery__img">
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="gallery-cell">
                                    <div class="gallery__content">
                                        <img src="" alt="" class="gallery__img">
                                    </div>
                                </div>
                                <div class="gallery-cell">
                                    <div class="gallery__content">
                                        <img src="" alt="" class="gallery__img">
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__reviews reviews">
                <div class="reviews__container _container">
                    <div class="reviews__header header-block">
                        <h2 class="header-block__title">
                            Отзывы <br><span clas="reviews__title-span">наших клиентов</span>
                        </h2>
                    </div>
                    <div class="reviews__body">
                        <div class="reviews__items">
                            <div class="reviews__item">
                                <img src="/static/img/gallery/reviews/1.png" alt="review1">
                            </div>
                            <div class="reviews__item">
                                <img src="/static/img/gallery/reviews/2.png" alt="review2">
                            </div>
                            <div class="reviews__item">
                                <img src="/static/img/gallery/reviews/3.png" alt="review3">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__team team" id="team">
                <div class="team__container _container">
                    <div class="team__header header-block">
                        <h2 class="header-block__title">
                            наша команда
                        </h2>
                    </div>
                    <div class="team__body">
                        <div class="team__items">
                            <div class="team__item">
                                <img src="/static/img/team/1.jpg" alt="designer" class="team__img">
                                <div class="team__content">
                                    <div class="team__name">
                                        Дизайнер + Верстальщик
                                    </div>
                                    <div class="team__text">
                                        Проектирует внешний вид сайта, логотип, баннеры, оформляет акции. Далее
                                        переносит готовый дизайн на сайт, работает с интерактивными элементами,
                                        оформляет ссылки, адаптирует внешний вид сайта под все устройства.
                                    </div>
                                </div>
                            </div>
                            <div class="team__item">
                                <img src="/static/img/team/2.jpg" alt="programmer" class="team__img">
                                <div class="team__content">
                                    <div class="team__name">
                                        Программист
                                    </div>
                                    <div class="team__text">
                                        Создает функционал сайта, настраивает CMS систему управления сайтом, подключает
                                        системы аналитики и оптимизирует сайт под поисковые системы.
                                    </div>
                                </div>
                            </div>
                            <div class="team__item">
                                <img src="/static/img/team/3.jpg" alt="seo" class="team__img">
                                <div class="team__content">
                                    <div class="team__name">
                                        Менеджер проекта
                                    </div>
                                    <div class="team__text">
                                        Решает текущие вопросы процесса разработки или рекламы, контролирует сроки и
                                        результат работ. Всегда находится на связи.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__faq faq" id="faq">
                <img class="background__img" src="/static/img/background/12.svg" alt=""
                    style="left: 0%; top: 7090px; max-width: 513px;">
                <img class="background__img background__img13" src="/static/img/background/13.svg" alt=""
                    style="left: 80%; top: 6800px; max-width: 189px;">
                <img class="background__img background__img14" src="/static/img/background/14.svg" alt=""
                    style="left: 90%; top: 7100px; max-width: 62px;">
                <div class="container__faq _container">
                    <div class="faq__header header-block">
                        <h2 class="header-block__title">
                            у нас спрашивают
                        </h2>
                    </div>
                    <div class="faq__body">
                        <div class="faq__accordions">
                            <div class="faq__accordion">
                                <button class="accordion">
                                    <div class="accordion__text">
                                        РАЗРАБОТКА САЙТОВ: ГДЕ СТОИТ И ГДЕ НЕЛЬЗЯ ЭКОНОМИТЬ?
                                    </div>
                                </button>
                                <div class="panel">
                                    <p>
                                        Все просто! Экономьте там, где специалистом являетесь Вы. Не экономьте на том, в
                                        чем специалистом не являетесь. Доверьте нашей web-студии всю техническую работу,
                                        четко сформулировав задачу, мы сами составим план работы и согласуем его с вами.
                                        Напишите развернутые описания ваших услуг, расскажите о преимуществах вашей
                                        компании так, как об этом не сможет рассказать никто другой! Подготовив описания
                                        услуг или товаров, качественные фото и описания, вы значительно сэкономите время
                                        и стоимость работы.
                                    </p>
                                </div>
                            </div>
                            <div class="faq__accordion">
                                <button class="accordion">
                                    <div class="accordion__text">
                                        НА ЧТО ОБРАТИТЬ ВНИМАНИЕ, ЗАКАЗЫВАЯ РАЗРАБОТКУ САЙТА?
                                    </div>
                                </button>
                                <div class="panel">
                                    <p>
                                        Прежде чем заказать в web-студии сайт, заложите в Ваш бизнес-план бюджет на
                                        создание сайта, на оплату продвижения, контекстную рекламную кампанию.
                                        Познакомьтесь с веб-ресурсами конкурентов и представьте, как Вы видите сайт:
                                        ожидания, поставленные задачи, его развитие в дальнейшем. Для ускорения
                                        разработки и снижения итоговой стоимости уместно заранее подготовить контент,
                                        который вы планируете размещать на интернет-ресурсе, и предоставить его
                                        веб-студии.
                                    </p>
                                </div>
                            </div>
                            <div class="faq__accordion">
                                <button class="accordion">
                                    <div class="accordion__text">
                                        ЧТО ПОВЛИЯЕТ НА ЦЕНУ САЙТА?
                                    </div>
                                </button>
                                <div class="panel">
                                    <p>
                                        Наша web-студия предлагает создание сайтов по умеренным ценам. Мы учитываем
                                        такие факторы: <br>
                                        а) <b>Разработка дизайна.</b> Количество отрисованных, уникальных страниц
                                        повышает
                                        стоимость проекта. Если Вас это не устраивает, мы разработаем сайт на основе
                                        прототипа. При этом мы гарантируем качественную работу даже для недорогих
                                        проектов. <br>
                                        б) <b>Сроки.</b> Основываясь на Ваших пожеланиях и плане, мы определим удобные
                                        сроки
                                        для
                                        каждой задачи. Мы заинтересованы в том, чтобы разработка интернет-сайтов в нашей
                                        веб-студии происходила вовремя. Вы можете заказать срочное выполнение проекта
                                        или конкретной задачи, но их стоимость будет выше. <br>
                                        в) <b>Специальные функции и инструменты.</b> Вы хотите получить интересные или
                                        уникальные фишки? Это могут быть необычные интерфейсы, скрипты и компоненты,
                                        фильтры и интеграции с CRM или другими сервисами? Для нас это не проблема! Цена
                                        разработки таких сайтов нашей веб-студией в Москве будет зависеть того,
                                        насколько сложно реализовать такую идею. А также, мы готовы разработать
                                        компромиссное решение, чтобы выполнить задачу и сэкономить. <br>
                                        г) <b>Контент.</b> На цену напрямую влияет количество и качество контента. Чем
                                        лучше
                                        информация для сайта, подготовленная Вами, тем проще и дешевле обойдется
                                        наполнение сайта.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="page__order order" id="order">
                <div class="order__container _container">
                    <div class="order__panel-buttons">
                        <div class="panel-buttons__title">Выбери, что подходит тебе!</div>
                        <div class="panel-buttons__buttons">
                            <a href="#0" class="order__button button cd-popup-trigger">Быстрое начало проекта</a>
                            <a href="https://t.me/devup322" class="order__button button">Связаться с нами</a>
                        </div>
                    </div>
                    <!-- popup -->
                    <div class="cd-popup" role="create">
                        <div class="cd-popup-container">
                            <div class="popup__header">
                                Начало создания вашего сайта!
                            </div>
                            <div class="popup__body">
                                <div class="popup__items">
                                    <form class="popup__item form" action="#" id="form">
                                        <div class="form__item">
                                            <!-- <label for="name">Укажите ваше Имя</label> -->
                                            <input class="input" type="text" id="name" placeholder="Укажите ваше Имя"
                                                autofocus required>
                                        </div>
                                        <div class="form__item">
                                            <!-- <label for="telephone">Укажите ваш Телефон</label> -->
                                            <input class="input" type="tel" id="telephone"
                                                placeholder="Укажите ваш Телефон" autofocus required>
                                        </div>
                                        <div class="form__item">
                                            <!-- <label for="email">Укажите ваш Email</label> -->
                                            <input class="input" type="email" id="email" placeholder="Укажите ваш Email"
                                                autofocus required pattern="\S+@[a-z]+.[a-z]+">
                                        </div>
                                        <div class="form__item">
                                            <!-- <label for="comments"> Напишите о том, каким вы видете свой сайт. Для чего он? Какая цель?</label> -->
                                            <textarea rows="4" cols="33" class="input" type="text" id="comments"
                                                placeholder="Напишите о том, каким вы видете свой сайт. Для чего он? Какая цель?"></textarea>
                                        </div>
                                        <div class="form__item">
                                            <div class="field__wrapper">
                                                <input name="file" type="file" name="file" id="field__file-2"
                                                    class="field field__file" multiple>

                                                <label class="field__file-wrapper input" for="field__file-2">
                                                    <div class="field__file-fake">Прикрепите бриф или ТЗ </div>
                                                    <img class="field__file-button" src="/static/img/form/1.svg">
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="popup__item">
                                        <div class="popup__content">
                                            <div class="popup__content-title">
                                                Почему важно определиться с идеей?
                                            </div>
                                            <div class="popup__content-text">
                                                Прежде чем заказать в web-студии сайт, заложите в Ваш бизнес-план бюджет
                                                на создание сайта, на оплату продвижения, контекстную рекламную
                                                кампанию. Познакомьтесь с веб-ресурсами конкурентов и представьте, как
                                                Вы видите сайт: ожидания, поставленные задачи, его развитие в
                                                дальнейшем.
                                            </div>
                                        </div>
                                        <div class="popup__button">
                                            <input class="form__button button" type="submit" value="Отправить заявку"
                                                form="form">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#0" class="cd-popup-close img-replace">Close</a>
                        </div> <!-- cd-popup-container -->
                    </div> <!-- cd-popup -->

                    <div class="order__content">
                        <h2 class="order__header">
                            <span class="order__header-span">Не жди,</span> <br>
                            Закажи прямо сейчас!
                        </h2>
                        <div class="order__text">
                            <p>
                                При создании сайтов мы стараемся уделять каждому проекту особое внимание — поточная
                                разработка большого количества новых Интернет-ресурсов – это не про нас.<br>
                                Каждый изготовленный нами сайт разрабатывается с нуля быстро и в максимально высоком
                                качестве.
                            </p>
                            <p>
                                Web-студия *НАЗВАНИЕ* ориентирована на работу с небольшими компаниями и частными
                                лицами,благодаря чему обеспечивается невысокая цена разработки Интернет-проектов.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="footer">
            <img class="background__img-footer background__img" src="/static/img/background/15.svg" alt=""
                style="left: 10%; top: 8292px; max-width: 42px;">
            <img class="background__img-footer background__img" src="/static/img/background/16.svg" alt=""
                style="left: 13%; top: 8376px; max-width: 142px;">
            <div class="footer__main _container">
                <div class="footer__row">
                    <div class="footer__column footer__column1">
                        <a href="" class="footer__logo">
                            DevUP
                        </a>
                    </div>
                    <div class="footer__column">
                        <div class="footer__label">О НАС</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="menu-footer__list">
                                <!-- <li class="menu-footer__item">КТО МЫ</li>
                                <li class="menu-footer__item">КАК МЫ РАБОТАЕМ</li>
                                <li class="menu-footer__item">КОМАНДА</li> -->
                                <li class="menu-footer__item">
                                    <a href="#whoweare">кто мы</a>
                                </li>
                                <li class="menu-footer__item">
                                    <a href="#ourwork">как мы работаем</a>
                                </li>
                                <li class="menu-footer__item">
                                    <a href="#portfolio">портфолио</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__column">
                        <div class="footer__label">ПОМОЩЬ</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="menu-footer__list">
                                <!-- <li class="menu-footer__item">ПОРТФОЛИО</li>
                                <li class="menu-footer__item">ВОПРОСЫ</li>
                                <li class="menu-footer__item">СДЕЛАТЬ ЗАКАЗ</li> -->
                                <li class="menu-footer__item">
                                    <a href="#team">команда</a>
                                </li>
                                <li class="menu-footer__item">
                                    <a href="#faq">вопросы</a>
                                </li>
                                <li class="menu-footer__item">
                                    <a href="#order">сделать заказ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class=" footer__column">
                        <div class="footer__label">ЮРИДИЧЕСКОЕ</div>
                        <nav class="footer__menu menu-footer">
                            <ul class="menu-footer__list">
                                <li class="menu-footer__item">ПОЛИТИКА КОНФИДЕНЦИАЛЬНОСТИ</li>
                            </ul>
                        </nav>
                    </div>
                    <div class="footer__column footer__column5">
                        <div class="footer__social">
                            <div class="social__list">
                                <a href="mailto:TeamDevUp@gmail.com" class="social__item">
                                    <img class="social__img" src="/static/img/social/gmail.svg" alt="gmail">
                                </a>
                                <a href="" class="social__item">
                                    <img class="social__img" src="/static/img/social/instagram.svg" alt="instagram">
                                </a>
                                <a href="https://t.me/devup322" class="social__item">
                                    <img class="social__img" src="/static/img/social/telegram.svg" alt="telegram">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/flickity/1.0.2/flickity.pkgd.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/static/js/scripts.js"></script>
</body>

</html>