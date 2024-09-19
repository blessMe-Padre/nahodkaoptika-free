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
                    <?php
                    // Получаем текущую категорию, если находимся на странице категории
                    $current_category = get_queried_object();
                    // Проверяем, является ли текущий объект категорией
                    $current_category_id = ($current_category && isset($current_category->term_id)) ? $current_category->term_id : 0;

                    // Получаем список категорий, исключая определенные ID
                    $categories = get_categories(array(
                        'exclude' => array(7, 8) // Исключаем категории с ID 7 и 8
                    ));

                    if (!empty($categories)):
                        foreach ($categories as $category):
                            $active_class = ($category->term_id == $current_category_id) ? 'is-active' : '';
                            ?>
                            <li>
                                <a href="<?php echo get_category_link($category->term_id); ?>"
                                    class="category__header-link <?php echo $active_class; ?>"><?php echo esc_html($category->name); ?></a>
                            </li>
                        <?php endforeach;
                    endif;
                    ?>
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
                            <?php echo do_shortcode('[fe_widget id=65]'); ?>
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
                    <?php
                    // Получение текущей категории
                    $current_category = get_queried_object();

                    // Определение текущей страницы
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                    // Проверка, если мы находимся на архиве категории и текущая категория определена
                    if (is_category() && $current_category) {
                        // Параметры запроса для категорий
                        $args = array(
                            'post_type' => 'post', // Замените на ваш тип записи, если отличается
                            'posts_per_page' => 4, // Количество постов для отображения на одной странице
                            'paged' => $paged, // Текущая страница
                            'cat' => $current_category->term_id, // Ограничение по текущей категории
                        );
                    } else {
                        // Параметры запроса для страницы /catalog/ без категории
                        $args = array(
                            'post_type' => 'post', // Замените на ваш тип записи, если отличается
                            'posts_per_page' => 4, // Количество постов для отображения на одной странице
                            'paged' => $paged, // Текущая страница
                        );
                    }

                    // Создание нового объекта WP_Query
                    $query = new WP_Query($args);

                    // Проверка наличия постов
                    if ($query->have_posts()) {
                        // Начало цикла
                        while ($query->have_posts()) {
                            $query->the_post();
                            ?>
                            <li class="card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="card__img">
                                        <div class="image-wrapper">
                                            <?php if (has_post_thumbnail()): ?>
                                                <?php the_post_thumbnail('large', ['class' => 'main-product-img']); ?>
                                            <?php else: ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/src/img/img-placeholder.jpg"
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
                        // Сброс глобальных данных поста
                        wp_reset_postdata();
                    } else {
                        echo '<li>Нет доступных продуктов.</li>';
                    }
                    ?>
                </ul>

                <!-- Добавление пагинации -->

                <div class="pagination">
                    <?php
                    $big = 999999999; // нужно для уникальности параметра в ссылке
                    
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))), // Формат ссылки для пагинации
                        'format' => '?paged=%#%', // Параметр пагинации
                        'current' => max(1, get_query_var('paged')), // Текущая страница
                        'total' => $query->max_num_pages, // Общее количество страниц
                        'prev_text' => __('&larr;'), // Текст ссылки "Назад"
                        'next_text' => __('&rarr;'), // Текст ссылки "Вперед"
                    ));
                    ?>
                </div>




                <!-- навигация -->

                <!-- ============================================================================================================================ -->
            </div>

        </div>
    </div>

</main>

<?php get_footer(); ?>