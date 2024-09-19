<?php
/*
Template Name: Страница "Продукта"
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">Контакты</h1>

    <section class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
                <li><a href="/">Главная</a></li>
                <li>—</li>
                <li><a href="/">Каталог</a></li>
                <li>—</li>
                <li><span><?php the_title(); ?></span></li>
            </ul>
        </div>
    </section>

    <section class="main-product">
        <div class="container">
            <div class="main-product__wrapper">
                <div class="image-wrapper">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large', ['class' => 'main-product-img']); ?>
                    <?php else: ?>
                        <img class="main-product-img"
                            src="<?php echo get_template_directory_uri() ?>/src/img/img-placeholder.jpg" width="588"
                            height="385" alt="продукт">
                    <?php endif; ?>
                </div>
                <div class="main-product__info">
                    <h1 class="mb-5 main-product__title"><?php the_title(); ?></h1>
                    <div class="flex gap-[10px]">
                        <span class="text-gray">Производитель: </span>
                        <span class="text-gray"><?= get_field("производитель"); ?></span>
                    </div>
                    <div class="flex gap-[10px]">
                        <span class="text-gray">Пол: </span>
                        <span class="text-gray"><?= get_field("пол"); ?></span>
                    </div>
                    <div class="flex gap-[10px]">
                        <span class="text-gray">Вид оправы: </span>
                        <span class="text-gray"><?= get_field("вид_оправы"); ?></span>
                    </div>
                    <div class="flex gap-[10px]">
                        <span class="text-gray">Материал оправы: </span>
                        <span class="text-gray"><?= get_field("материал_оправы"); ?></span>
                    </div>
                    <div class="flex gap-[10px]">
                        <span class="text-gray">Форма оправы: </span>
                        <span class="text-gray"><?= get_field("форма_оправы"); ?></span>
                    </div>

                    <div class="flex items-center gap-5 mt-7">
                        <a class="default-button popup-link py-2" href="#popup2">Оставить заявку</a>
                        <p class="product__price">
                            <?= number_format(get_field("цена"), 0, '.', ' '); ?><span>&nbsp;₽</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- вас может заинтересовать -->
    <section class="products-section">
        <div class="container">
            <h2 class="title">вас может заинтересовать</h2>
            <ul class="products-section__wrapper">
                <?php
                // Получаем категории текущего поста
                $categories = get_the_category();
                // Проверяем, есть ли категории у поста и берем первую категорию
                if (!empty($categories)) {
                    $category_id = $categories[0]->term_id; // ID первой категории
                }

                $my_posts = get_posts(
                    array(
                        'numberposts' => 4,
                        'category' => $category_id,
                        'orderby' => 'rand', // Выбираем случайный порядок
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
                                    <?= number_format(get_field("цена"), 0, '.', ' '); ?><span>&nbsp;₽</span>
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

    <!-- Модальное окно для заказа товара -->
    <section id="popup2" class="popup">
        <div class="popup__body">
            <div class="popup__content">
                <button class="popup__btn close-popup" aria-label="Закрыть" tabindex="4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="18" viewBox="0 0 23 18" fill="none">
                        <path d="M4 1.45508L19.9099 17.365" stroke="#333" />
                        <path d="M4.54492 16.9099L20.4548 1.00001" stroke="#333" />
                    </svg>
                </button>
                <h2 class="text-start text-dark-green z-10  md:text-4xl text-xl pb-7 font-bold">Оформите заказ</h2>
                <p class="mb-8">Оставьте свои контакты и наш менеджер свяжется с вами для подтверждения</p>

                <div class="popup-order-wrapper">
                    <div class="popup-img">
                        <img class="popup-order-img" src="" alt="">
                    </div>
                    <p class="popup-order-name"></p>
                </div>


                <div class="form-wrapper">
                    <input type="text" class="form__input" placeholder="Введите Ваше имя" />
                    <input class="popup-order-hidden-input" type="hidden">

                    <input type="tel" class="form__input" name="tel" placeholder="Введите номер телефона">

                    <input class="default-button" type="submit" value="Отправить">
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>