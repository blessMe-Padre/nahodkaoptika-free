<ul class="category__header-list">
    <?php
    $categories = get_categories(array(
        'exclude' => array(7, 8) // Исключаем категории с ID 7 и 8
    ));

    if (!empty($categories)):
        foreach ($categories as $category): ?>
            <li>
                <a href="<?php echo get_category_link($category->term_id); ?>"
                    class="category__header-link"><?php echo esc_html($category->name); ?></a>
            </li>
        <?php endforeach;
    endif;
    ?>
</ul>

<ul class="category__product-list">
    <?php
    $categories = get_the_category();
    // Проверяем, есть ли категории у поста и берем первую категорию
    if (!empty($categories)) {
        $category_id = $categories[0]->term_id; // ID первой категории
        echo $category_id;
    }
    ?>

    <li class="card">
        <a href="#">
            <div class="card__img">
                <div class="image-wrapper">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/product/image-5.png" width="320"
                        height="190" alt="товар">
                </div>
            </div>
            <div class="card__wrapper">
                <h3 class="card__title">Nina Ricci</h3>
                <p class="card__price">18&nbsp;500<span>&nbsp;₽</span></p>
            </div>
        </a>
    </li>
</ul>