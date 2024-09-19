<?php
/*
Template Name: Страница "Услуги"
*/
get_header();
?>
<main>
    <h1 class="visually-hidden">УСЛУГИ</h1>

    <section class="services">
        <div class="container">
            <h2 class="title">УСЛУГИ</h2>
            <ul class="services__list">
                <li class="services__item">Ремонт очков</li>
                <li class="services__item clamp-bg"><span>Изготовление очков</span></li>
                <li class="services__item clamp-bg"><span>Расширенная диагностика</span></li>
                <li class="services__item">
                    <p class="mb-3">Экспресс диагностика</p>
                    <a class="default-button default-button--white popup-link py-2" href="#popup1">Оставить заявку</a>
                </li>
            </ul>
        </div>
    </section>

    <section class="consultation">
        <div class="container">
            <div class="consultation__wrapper">
                <h2 class="consultation__title">записаться на любую услугу и получить бесплатную консультацию можно
                    через whatsapp</h2>
                <div class="flex flex-wrap gap-5 items-center">
                    <a class="default-button flex gap-2 items-center justify-center max-w-[170px] py-2"
                        href=" https://wa.me/79147085183">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/whatsapp.svg" width="30"
                            height="30" alt="whatsapp">
                        <span>Связаться</span>
                    </a>
                    <p>Или позвоните на наш номер</p>
                    <a class="flex gap-2 items-center justify-center hover:underline" href="tel:+79147085183">
                        <img src="<?php echo get_template_directory_uri() ?>/src/img/icons/phone.svg" width="30"
                            height="30" alt="телефон">
                        <span>+7 914 708-51-83</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>