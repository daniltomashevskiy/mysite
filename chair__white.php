<?php require "blocks/header.php" ?>

<section class="section__1">
    <div class="container">
        <div class="section__header">
            <h3>Стілець Білий</h3>
        </div>
        <div class="chair__white">
            <div class="chair__white__images">
                <?php
                $chairImages = ['chair__white__image__1', 'chair__white__image__2', 'chair__white__image__3'];

                foreach ($chairImages as $image) {
                    echo '<div class="' . $image . '"></div>';
                }
                ?>
            </div>

            <div class="chair__white__main"></div>

            <div class="chair__white__text">
                <div class="price">1488₴</div>
                <div class="status">В наявності</div>
                <div class="btn">КУПИТИ</div>
            </div>
        </div>
    </div>
</section>

<div class="characteristics">
    <div class="container">
        <div class="title__char">ХАРАКТЕРИСТИКИ</div>
        <div class="main__char">
            <div class="list__char">
                <?php
                $characteristics = [
                    'Матеріал' => 'Пластик, дерево, метал',
                    'Колір' => 'Білий',
                    'Ширина' => '46 см',
                    'Висота' => '82 см',
                    'Призначення' => 'Для кухні, для вітальні'
                ];

                foreach ($characteristics as $title => $desc) {
                    echo '<div class="list__text">' . $title . ':</div>';
                }
                ?>
            </div>
            <div class="desc">
                <?php
                foreach ($characteristics as $title => $desc) {
                    echo '<div class="text__desc">' . $desc . '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="description">
    <div class="container">
        <div class="desc__title">ОПИС</div>
        <div class="desc__section">Міцна тканинна оббивка білого кольору зі стовідсоткової бавовни. Наповнення сидіння та спинки з піноматеріалу. Ніжки з масиву дуба, скріплені металевими дротинами.</div>
    </div>
</div>


<?php require "blocks/footer.php" ?>