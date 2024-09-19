<?php
/*
Template Name: Страница "О компании"
*/
get_header();
?>

<main>
    <section class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li><a href="/">Главная</a></li>
                <li>—</li>
                <li><span>О нас</span></li>
            </ul>
        </div>
    </section>

    <section class="py-14 pt-0">
        <div class="container">
            <h1 class="title">о нас</h1>
            <p class="text-gray max-w-[880px]">Приглашаем Вас посетить наши салоны оптики. У&nbsp;нас представлены
                оправы и&nbsp;солнцезащитные очки как мировых брендов, так и&nbsp;менее известных марок. Здесь
                Вы&nbsp;сможете найти все самое нужное и&nbsp;необходимое для коррекции Вашего зрения.
                А&nbsp;так&nbsp;же товары и&nbsp;аксессуары, которые помогут хорошо ухаживать за&nbsp;очками
                и&nbsp;контактными линзами, позволяя сделать пользование ими приятным, безопасным
                и&nbsp;продолжительным. . Осуществляется подбор очков и&nbsp;контактных линз любой сложности</p>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <div class="gallery__wrapper gallery-wrapper">
                <a href="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-1-1.webp"
                    data-caption="image">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-1.jpg" alt="image">
                </a>
                <a href="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-2-1.webp"
                    data-caption="image">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-2.jpg" alt="image">
                </a>
                <a href="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-3-1.webp"
                    data-caption="image">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-3.jpg" alt="image">
                </a>
                <a href="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-4-1.webp"
                    data-caption="image">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/gallery/image-4.jpg" alt="image">
                </a>
            </div>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <h2 class="title">почему люди выбирают находку оптик?</h2>
            <ul class="features__list">
                <li class="features__item">
                    <div class="features__item-top-decor"></div>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/features/icon-1.svg" width="85"
                        height="85" alt="icon">
                    <h3>Проверенные производители</h3>
                    <p>Сотрудничаем только с производителями, что гарантирует долговечность и надёжность наших товаров.
                        Вся продукция проходит строгий контроль качества.</p>
                </li>
                <li class="features__item">
                    <div class="features__item-top-decor"></div>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/features/icon-2.svg" width="85"
                        height="85" alt="icon">
                    <h3>Современное оборудование</h3>
                    <p>Наши точки оснащены новейшим оборудованием для диагностики и подбора очков. Это позволяет нам
                        обеспечить максимально точный результат</p>
                </li>
                <li class="features__item">
                    <div class="features__item-top-decor"></div>
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/features/icon-3.svg" width="85"
                        height="85" alt="icon">
                    <h3>Конкурентные цены</h3>
                    <p>Мы предлагаем справедливые цены на всю продукцию и услуги. Регулярные акции и скидки делают наши
                        товары еще более доступными.</p>
                </li>
            </ul>
        </div>
    </section>

</main>

<?php get_footer(); ?>