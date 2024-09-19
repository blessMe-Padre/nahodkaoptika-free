<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Находка Оптика</h1>

    <section class="main-swiper pt-[30px]">
        <div class="container">
            <div class="w-0 min-w-[100%] relative" style="width: 0; min-width: 100%;">
                <div class="main-item swiper">
                    <div class="swiper-pagination"></div>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide rounded-[6px] relative bg-black -z-10 max-h-screen ">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/src/img/main/slide1.webp"
                                    media="(min-width: 550px)" />
                                <img class="rounded-[6px]" style="width: -webkit-fill-available;"
                                    src="<?php echo get_template_directory_uri() ?>/src/img/main/hero-mobile.webp"
                                    alt="image">
                            </picture>
                        </div>
                        <div class="swiper-slide relative rounded-[6px] bg-black -z-10 max-h-screen">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/src/img/main/slide1.webp"
                                    media="(min-width: 550px)" />
                                <img class="rounded-[6px]" style="width: -webkit-fill-available;"
                                    src="<?php echo get_template_directory_uri() ?>/src/img/main/hero-mobile.webp"
                                    alt="image">
                            </picture>
                        </div>
                        <div class="swiper-slide relative rounded-[6px] bg-black -z-10 max-h-screen">
                            <picture>
                                <source srcset="<?php echo get_template_directory_uri() ?>/src/img/main/slide1.webp"
                                    media="(min-width: 550px)" />
                                <img class="rounded-[6px]" style="width: -webkit-fill-available;"
                                    src="<?php echo get_template_directory_uri() ?>/src/img/main/hero-mobile.webp"
                                    alt="image">
                            </picture>
                        </div>
                    </div>
                </div>
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
                    <p>Сотрудничаем только с производителями, что гарантирует долговечность и надёжность наших
                        товаров. Вся продукция проходит строгий контроль качества.</p>
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
                    <p>Мы предлагаем справедливые цены на всю продукцию и услуги. Регулярные акции и скидки делают
                        наши товары еще более доступными.</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="category-section">
        <div class="container">
            <h2 class="title">Категории</h2>
            <ul class="category-section__list">
                <li class="category-section__item">
                    <a href="#">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-1.png"
                                width="300" height="157" alt="product">
                        </div>
                        <h3>Аксессуары</h3>
                    </a>
                </li>
                <li class="category-section__item">
                    <a href="#">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-2.png"
                                width="300" height="157" alt="product">
                        </div>
                        <h3>Медицинские очки</h3>
                    </a>
                </li>
                <li class="category-section__item">
                    <a href="#">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-3.png"
                                width="300" height="157" alt="product">
                        </div>
                        <h3>Солнцезащитные очки</h3>
                    </a>
                </li>
                <li class="category-section__item">
                    <a href="#">
                        <div class="image-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-4.png"
                                width="300" height="157" alt="product">
                        </div>
                        <h3>Контактные линзы</h3>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Новинки -->
    <section class="products-section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title m-0">новинки</h2>
                <a class="default-button" href="#">Посмотреть всё</a>
            </div>
            <ul class="products-section__wrapper">
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-5.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Nina Ricci</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-6.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Etnia Barcelona 4 DONATE 56S</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-7.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Gucci 0340S</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-8.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Ultraflex Plus 1 Day 30pk (Somofilcon A)</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="products-section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title m-0">Популярные товары</h2>
                <a class="default-button" href="#">Посмотреть всё</a>
            </div>
            <ul class="products-section__wrapper">
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-5.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Nina Ricci</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-6.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Etnia Barcelona 4 DONATE 56S</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-7.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Gucci 0340S</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
                <li class="card">
                    <a href="#">
                        <div class="card__img">
                            <div class="image-wrapper">
                                <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-8.png"
                                    width="320" height="190" alt="товар">
                            </div>
                        </div>
                        <div class="card__wrapper">
                            <h3 class="card__title">Ultraflex Plus 1 Day 30pk (Somofilcon A)</h3>
                            <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <h2 class="title">УСЛУГИ</h2>
            <ul class="services__list">
                <li class="services__item">Ремонт очков</li>
                <li class="services__item clamp-bg"><span>Изготовление очков</span></li>
                <li class="services__item clamp-bg"><span>Расширенная диагностика</span></li>
                <li class="services__item">
                    <p class="mb-3">Экспресс диагностика</p>
                    <a class="default-button default-button--white popup-link py-2" href="#popup1">Оставить
                        заявку</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <h2 class="title">контакты</h2>
            <div class="contact__wrapper">
                <div class="map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A7fd1b6f1e415bbbfabbb557490444e63690952b49818b29be9b754ce9570bff0&amp;source=constructor"></iframe>
                </div>
                <div class="contact__info">
                    <div class="contact__block contact__block--black">
                        <p class="contact__city">Владивостокская, 5 </p>
                        <p class="contact__time">Ежедневно 10:00 — 19:00</p>
                    </div>
                    <div class="contact__block mb-8">
                        <h3 class="mb-4">ТРК Клён, пр-кт Мира, 51</p>
                            <p class="contact__time">Ежедневно 10:00 — 20:00</p>
                    </div>
                    <div class="contact__block">
                        <h3 class="mb-4">Озёрный бульвар, 16</p>
                            <p class="contact__time">Ежедневно 10:00 — 19:00</p>
                    </div>
                </div>
            </div>
    </section>

</main>

<?php get_footer(); ?>