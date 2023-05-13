<?php require "blocks/header.php" ?>

<div class="intro"> 
    <div class="container">
        <div class="intro__inner">
            <h1 class="intro__suptitle">Serenity — вітчизняний виробник меблів.</h1>
            <div class="intro__title">Ми представляємо широкий асортимент меблів різних категорій, серед яких ви неодмінно підберете потрібні Вам вироби.</div>
            <a class="btn" href="categories.php">Переглянути товари</a>
        </div>
    </div>
</div>

<div class="about">
    <div class="about__image"></div>
    <div class="about__text">
        <h1 class="about__suptitle">Про нас</h1>
        <div class="about__title">Раді запропонувати Вам меблі від найкращих виробників.</div>
        <div class="about__title">В 2003 році ми вперше виготовили шафу-купе. С тих пір пройшло 20 років, за цей час більше 200 000 одиниць затишної мебелі стоїть в українських оселях.</div>
        <div class="about__title">Більше третини наших співробітників — це майстри з 20-річним досвідом роботи, тому ми повністю довіряємо їм, а вони — нам. </div>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section__header">
            <h3>Чому варто обирати нас?</h3>
        </div>

        <div class="why">
            <?php
            $items = [
                [
                    'svg' => 'svg__item__1',
                    'title' => 'Гарантія',
                    'text' => 'На всю продукцію діє гарантія відповідно до законодавства України.'
                ],
                [
                    'svg' => 'svg__item__2',
                    'title' => 'Нам довіряють',
                    'text' => '20 років на ринку. Задоволені покупці та партнери, тисячі рекомендацій.'
                ],
                [
                    'svg' => 'svg__item__3',
                    'title' => 'Все для Вас',
                    'text' => 'Зробимо меблі на замовлення, які підходять саме Вам.'
                    ]
                ];
    
                foreach ($items as $item) {
                    echo '<div class="why__item">';
                    echo '<div class="' . $item['svg'] . '"></div>';
                    echo '<div class="why__title">' . $item['title'] . '</div>';
                    echo '<div class="why__text">' . $item['text'] . '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </section>
    
    <div class="ending"> 
        <div class="container__2">
            <div class="ending__inner">
                <div class="ending__title">Звертайтеся до нас прямо зараз.
                    Ми завжди раді Вам!</div>
                <a class="btn" href="categories.php">Обрати товари</a>
            </div>
        </div>
    </div>
    


<?php require "blocks/footer.php" ?>