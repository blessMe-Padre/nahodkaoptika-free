<form class="relative flex items-center gap-[20px] w-full" role="search" method="get" id="searchform"
    action="<?php echo home_url('/') ?>">

    <input class="search-input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s"
        placeholder="Поиск по товарам...">

    <button>
        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/search.svg" alt="Search"
            class="h-6 w-6 absolute top-1/2 left-[5px] transform -translate-y-1/2" />
    </button>
</form>