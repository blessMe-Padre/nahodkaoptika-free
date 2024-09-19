<?php
/*
Template Name: Страница "Категорий"
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Каталог</h1>

    <section class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li><a href="/">Главная</a></li>
                <li>—</li>
                <li><span>Каталог</span></li>
            </ul>
        </div>
    </section>

    <div class="category">
        <div class="container">
            <div class="category__header">
                <button class="category__filter-button">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/filters.svg" width="20"
                        height="20" alt="Фильтровать">
                    <span>Фильтры</span>
                </button>

                <ul class="category__header-list">
                    <li>
                        <a href="#" class="category__header-link is-active">Медицинские очки</a>
                    </li>
                    <li>
                        <a href="#" class="category__header-link">Солнцезащитные очки</a>
                    </li>
                    <li>
                        <a href="#" class="category__header-link">Аксессуары</a>
                    </li>
                    <li>
                        <a href="#" class="category__header-link">Контактные линзы</a>
                    </li>
                </ul>
            </div>

            <div class="category__wrapper relative">
                <div class="category__filter-block _tabs">
                    <div class="_tabs-accordion">
                        <button class="accordion__button _tabs-button">Пол
                            <svg class="accordion__button-svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.5" width="1" height="10" fill="#101010" />
                                <rect x="10" y="4.5" width="1" height="10" transform="rotate(90 10 4.5)"
                                    fill="#101010" />
                            </svg>
                        </button>
                        <div class="_tabs-content">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="_tabs-accordion">
                        <button class="accordion__button _tabs-button">Возраст
                            <svg class="accordion__button-svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.5" width="1" height="10" fill="#101010" />
                                <rect x="10" y="4.5" width="1" height="10" transform="rotate(90 10 4.5)"
                                    fill="#101010" />
                            </svg>
                        </button>
                        <div class="_tabs-content">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                    <div class="_tabs-accordion">
                        <button class="accordion__button _tabs-button">Бренд
                            <svg class="accordion__button-svg" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.5" width="1" height="10" fill="#101010" />
                                <rect x="10" y="4.5" width="1" height="10" transform="rotate(90 10 4.5)"
                                    fill="#101010" />
                            </svg>
                        </button>
                        <div class="_tabs-content">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                            <input type="checkbox" name="" id="">
                        </div>
                    </div>
                </div>

                <ul class="category__product-list">
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
                </ul>
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>