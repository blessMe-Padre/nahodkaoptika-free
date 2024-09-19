<?php
/*
Template Name: Страница "Контакты"
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
                <li><span>Контакты</span></li>
            </ul>
        </div>
    </section>

    <section class="contact pt-0">
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

    <div class="container">
        <ul class="contact-list">
            <li>
                <strong>ИНН: </strong><span>250810958286</span>
            </li>
            <li>
                <strong>ОГРН: </strong><span>307250814400140</span>
            </li>
            <li>
                <strong>Электронная почта: </strong><a href="mailto:nakhodkaoptik@mail.ru">nakhodkaoptik@mail.ru</a>
            </li>
            <li>
                <strong>Полное наименование: </strong><span>ИП Лактионов Иван Валерьевич</span>
            </li>
            <li>
                <strong>Адрес: </strong><span>Российская Федерация, 690054, Приморский край, г. Находка, ул. Ленинская
                    10а-12</span>
            </li>
        </ul>
    </div>

</main>

<?php get_footer(); ?>