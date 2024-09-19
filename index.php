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

                <?php
                $categories = get_categories(array(
                    'exclude' => array(7, 8) // Исключаем категории с ID 7 и 8
                ));

                if (!empty($categories)):
                    foreach ($categories as $category): ?>
                        <?php
                        $term_id = $category->term_id;
                        $tag_img = get_field('изображение_категории', 'term_' . $term_id);
                        ?>
                        <li class="category-section__item">
                            <a href="<?php echo get_category_link($category->term_id); ?>">
                                <div class="image-wrapper">

                                    <img src="<?php
                                    echo $tag_img ? $tag_img : get_template_directory_uri() . '/src/img/product/image-1.png ';
                                    ?>" />
                                </div>
                                <h3><?php echo esc_html($category->name); ?></h3>
                            </a>
                        </li>
                    <?php endforeach;
                endif;
                ?>
            </ul>
        </div>
    </section>

    <!-- Новинки -->
    <section class="products-section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title m-0">новинки</h2>
                <?php
                $category_link = get_category_link(7);
                echo '<a class="default-button" href="' . esc_url($category_link) . '">Посмотреть всё</a>';
                ?>
            </div>
            <ul class="products-section__wrapper">
                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => 4,
                        'category' => 7,
                        'orderby' => 'rand',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    )
                );

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <li class="card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card__img">
                                <div class="image-wrapper">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large', ['class' => 'main-product-img']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/img-placeholder.jpg"
                                            width="320" height="190" alt="товар">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card__wrapper">
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <p class="card__price">
                                    <?= number_format(get_field("price"), 0, '.', ' '); ?><span>&nbsp;₽</span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <?php
                }
                wp_reset_postdata();
                ?>
            </ul>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="products-section">
        <div class="container">
            <div class="title-wrapper">
                <h2 class="title m-0">Популярны товары</h2>
                <?php
                $category_link = get_category_link(8);
                echo '<a class="default-button" href="' . esc_url($category_link) . '">Посмотреть всё</a>';
                ?>
            </div>
            <ul class="products-section__wrapper">
                <?php
                $my_posts = get_posts(
                    array(
                        'numberposts' => 4,
                        'category' => 8,
                        'orderby' => 'rand',
                        'order' => 'ASC',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    )
                );

                foreach ($my_posts as $post) {
                    setup_postdata($post);
                    ?>
                    <li class="card">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card__img">
                                <div class="image-wrapper">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('large', ['class' => 'main-product-img']); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri() ?>/src/img/img-placeholder.jpg"
                                            width="320" height="190" alt="товар">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="card__wrapper">
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <p class="card__price">
                                    <?= number_format(get_field("price"), 0, '.', ' '); ?><span>&nbsp;₽</span>
                                </p>
                            </div>
                        </a>
                    </li>

                    <?php
                }
                wp_reset_postdata();
                ?>
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