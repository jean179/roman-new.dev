<!-- Header -->
<header class="row header">
    <div class="small-12 large-9 columns">
        <h1 class="site-title">{{ HTML::link('/','Гостевой дом «Роман»', array('title' => 'Гостевой дом «Роман» приглашает отдохнуть в Анапе')) }}</h1>
        <h2 class="site-slogan">Отдохни в Анапе с семьёй на Чёрном море!</h2>
    </div>
    <div class="large-3 columns">
        <ul class="top-contacts">
            <li><i class="fa fa-phone"></i> +7 (918) 668-22-54</li>
            <li><i class="fa fa-phone"></i> +7 (918) 668-22-54</li>
            <li><a href="mailto:jean179mail.ru"><span class="fa fa-envelope"></span> jean179@mail.ru</a></li>
        </ul>
    </div>
</header>

<!-- Top menu -->
<div class="row top-menu">
    <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name"></li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Меню сайта</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="left">
                    <li{{ Request::is('/') ? ' class="active"' : '' }}>{{ HTML::link('/', 'Главная', array('title' =>'Гостевой дом «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/about') ? ' class="active"' : '' }}>{{ HTML::link('/about', 'О нас', array('title' =>'О гостевой дом «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/rooms') ? ' class="active"' : '' }}>{{ HTML::link('/rooms', 'Номера', array('title' =>'Номерной фонд гостевой дом «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/bron') ? ' class="active"' : '' }}>{{ HTML::link('/bron', 'Бронирование', array('title' =>'Забронировать номер в гостевой дом «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/gallery') ? ' class="active"' : '' }}>{{ HTML::link('/gallery', 'Фотографии', array('title' =>'Фотогалереи гостевого дома «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/reviews') ? ' class="active"' : '' }}>{{ HTML::link('/reviews', 'Отзывы', array('title' =>'Отзывы о гостевой дом «Роман» в Анапе')) }}</li>
                    <li{{ Request::is('/contacts') ? ' class="active"' : '' }}>{{ HTML::link('/contacts', 'Контакты', array('title' =>'Контактная информация о гостевой дом «Роман» в Анапе')) }}</li>
                </ul>
            </section>
        </nav>
    </div>
</div>