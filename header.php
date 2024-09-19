<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Находка Оптика | <?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body class="wrapper">

    <header class="z-10 w-full md-28 transition-colors pt-[20px] header">
        <div class="container">
            <div class="header__wrapper">
                <div class="header__item">
                    <a href="/">
                        <img class="header__logo"
                            src="<?php echo get_template_directory_uri() ?>/src/img/icons/logo.svg" alt="logo" />
                    </a>

                    <div class="flex items-center gap-[20px] w-full">
                        <a href="/catalog"
                            class="bg-black text-white py-[10px] px-[20px] header-catalog-link">Каталог</a>
                        <div class="relative flex items-center gap-[20px] w-full">
                            <input class="search-input" type="search" placeholder="Поиск по товарам...">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/search.svg" alt="Search"
                                class="h-6 w-6 absolute top-1/2 left-[5px] transform -translate-y-1/2" />
                        </div>
                    </div>

                </div>

                <div class="header__block flex gap-[40px]">
                    <img class="header__logo-mobile relative z-30"
                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/logo.svg" alt="logo" />

                    <?php wp_nav_menu([
                        'theme_location' => 'main',
                        'container' => '',
                        'menu_class' => 'header__links',
                        'menu_id' => ''
                    ]);
                    ?>

                    <div class="header__social-wrapper">
                        <ul class="social-list">
                            <li>
                                <a class="social-link social-link--header" href="#">
                                    <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.8591 6.17507C13.4993 6.84473 13.9307 7.68619 14.1009 8.59684C14.271 9.50749 14.1725 10.448 13.8173 11.3036C13.4621 12.1592 12.8656 12.893 12.1006 13.4154C11.3356 13.9378 10.435 14.2264 9.50881 14.2458C8.89134 14.2476 8.2797 14.1263 7.70961 13.8891C7.13951 13.6519 6.62238 13.3035 6.18841 12.8642C5.30243 11.9688 4.80589 10.7597 4.80683 9.50007C4.80228 8.87938 4.92007 8.26387 5.15347 7.68872C5.38687 7.11356 5.73131 6.59003 6.16711 6.14803C6.6029 5.70603 7.12152 5.35423 7.69332 5.11273C8.26512 4.87122 8.8789 4.74475 9.4996 4.74053C10.7287 4.73995 11.9079 5.22687 12.7785 6.09448L12.8591 6.17507ZM7.75314 12.1176C8.27234 12.4554 8.88026 12.6311 9.4996 12.6224C9.90681 12.6197 10.3095 12.5368 10.6846 12.3784C11.0598 12.22 11.4 11.9892 11.6859 11.6992C11.9718 11.4092 12.1978 11.0658 12.3509 10.6884C12.504 10.3111 12.5813 9.90728 12.5782 9.50007C12.5782 8.88068 12.3939 8.27529 12.0488 7.76092C11.7037 7.24654 11.2135 6.84642 10.6404 6.61143C10.0673 6.37645 9.43727 6.31722 8.83043 6.44129C8.22359 6.56535 7.66735 6.8671 7.23248 7.30816C6.7976 7.74922 6.50373 8.30966 6.38823 8.91819C6.27274 9.52672 6.34085 10.1559 6.5839 10.7256C6.82695 11.2953 7.23395 11.7799 7.75314 12.1176Z" />
                                        <path
                                            d="M15.5032 4.95303C15.5587 4.81609 15.5867 4.66954 15.5855 4.52178C15.5865 4.26025 15.497 4.00642 15.3322 3.80336L15.3068 3.77573C15.2766 3.73859 15.2427 3.70464 15.2055 3.67442L15.1825 3.65139C14.9829 3.48472 14.731 3.39344 14.471 3.39349C14.2488 3.39715 14.0325 3.46595 13.8491 3.59136C13.6656 3.71676 13.523 3.89326 13.4389 4.09896C13.3548 4.30466 13.3329 4.53052 13.376 4.74853C13.4191 4.96655 13.5252 5.16713 13.6812 5.3254C13.7841 5.42965 13.9068 5.51243 14.0419 5.56895C14.1771 5.62547 14.3222 5.65461 14.4687 5.65468C14.6164 5.65377 14.7626 5.62374 14.8987 5.56629C15.0348 5.50883 15.1583 5.4251 15.262 5.31987C15.3658 5.21464 15.4477 5.08998 15.5032 4.95303Z" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M5.35485 0.289551H13.6443C14.9879 0.289551 16.2764 0.823266 17.2264 1.77329C18.1764 2.72331 18.7101 4.01181 18.7101 5.35534V13.6448C18.7101 14.9883 18.1764 16.2768 17.2264 17.2269C16.2764 18.1769 14.9879 18.7106 13.6443 18.7106H5.35485C4.01132 18.7106 2.72282 18.1769 1.7728 17.2269C0.822778 16.2768 0.289062 14.9883 0.289062 13.6448V5.35534C0.289062 4.01181 0.822778 2.72331 1.7728 1.77329C2.72282 0.823266 4.01132 0.289551 5.35485 0.289551ZM15.8735 15.874C16.6577 15.0898 17.0983 14.0262 17.0983 12.9172V6.08297C17.0983 4.97395 16.6577 3.91035 15.8735 3.12615C15.0893 2.34195 14.0257 1.90139 12.9167 1.90139H6.08248C4.97346 1.90139 3.90986 2.34195 3.12566 3.12615C2.34146 3.91035 1.9009 4.97395 1.9009 6.08297V12.9172C1.9009 14.0262 2.34146 15.0898 3.12566 15.874C3.90986 16.6582 4.97346 17.0988 6.08248 17.0988H12.9167C14.0257 17.0988 15.0893 16.6582 15.8735 15.874Z" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="social-link social-link--header" href="#">
                                    <svg class="social-link__telegram" width="20" height="17" viewBox="0 0 20 17"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M1.92175 7.31543C7.02334 5.09273 10.4252 3.62738 12.1273 2.91945C16.9873 0.898061 17.9971 0.546899 18.6553 0.535278C18.8001 0.532749 19.1238 0.568638 19.3334 0.738784C19.6445 0.991167 19.6462 1.539 19.6117 1.90158C19.3483 4.66876 18.2088 11.3839 17.629 14.4832C17.3837 15.7946 16.9007 16.2344 16.4331 16.2773C15.4168 16.3709 14.6451 15.6057 13.6608 14.9605C12.1206 13.9509 11.2505 13.3224 9.75539 12.3372C8.02761 11.1986 9.14767 10.5728 10.1323 9.5501C10.39 9.28248 14.8676 5.20969 14.9543 4.84021C14.9652 4.794 14.9752 4.62173 14.8729 4.53082C14.7706 4.4399 14.6196 4.47093 14.5106 4.49568C14.3561 4.53075 11.8956 6.15708 7.12902 9.37462C6.43059 9.85423 5.798 10.0879 5.23123 10.0756C4.60636 10.0622 3.40446 9.72237 2.51094 9.43191C1.415 9.07569 0.543963 8.88729 0.619842 8.28231C0.659354 7.9671 1.0933 7.64486 1.92175 7.31543Z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>

                        <button class="btn-close-menu z-30">
                            <svg viewBox="0 0 64 48">
                                <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                                <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                                <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                            </svg>
                        </button>
                    </div>

                    <a href="#popup1"
                        class="popup-link header-popup-link bg-black text-white w-[165px] text-center border-[2px] py-[10px]">Оставить
                        заявку</a>

                </div>

            </div>

            <div class="mobile-menu">
                <ul class="mb-7">
                    <li><a href="#">Каталог</a></li>
                    <li><a href="#">Медицинские очки</a></li>
                    <li><a href="#">Солнцезащитные очки</a></li>
                    <li><a href="#">Аксессуары</a></li>
                    <li><a href="#">Контактные линзы</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>

                <div class="header__social-wrapper">
                    <img class="header__social-img"
                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/inst_svg.svg" width="35"
                        height="35" alt="instagram">
                    <img class="header__social-img"
                        src="<?php echo get_template_directory_uri() ?>/src/img/icons/tg_svg.svg" width="35" height="35"
                        alt="telegram">
                </div>
            </div>
        </div>
    </header>