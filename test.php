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

acsessuari id 3
linzi id 6
vedicina id 4
sun id 5