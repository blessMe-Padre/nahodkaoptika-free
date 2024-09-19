<?php
/*
Template Name: Страница поиска - шаблон
*/
?>
<?php get_header(); ?>

<main class="container">
    <div class="page-wrapper">

        <div class="flex mb-5">
            <h1 class="search-title">
                Результаты поиска для:
                <?php echo get_search_query(); ?>
            </h1>
        </div>

        <ul class="search-list">
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
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
                                    <?= number_format(get_field("цена"), 0, '.', ' '); ?><span>&nbsp;₽</span>
                                </p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php else: ?>
                <p>По вашему запросу ничего не найдено.</p>
            <?php endif; ?>
        </ul>
        <div class="navigation">
            <?php
            global $wp_query;

            $big = 999999999; // нужно большое число
            $current = max(1, get_query_var('paged'));

            echo paginate_links(
                array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => $current,
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '←',
                    'next_text' => '→',
                )
            );
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>