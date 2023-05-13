<?php require "blocks/header.php" ?>

<section class="section__1">
    <div class="container">
        <div class="section__header_1">
            <h3>Категорії товарів</h3>
        </div>

        <div class="category">
            <?php
            $categories = [
                ['title' => 'Крісла', 'svg' => 'svg__category_1'],
                ['title' => 'Стільці', 'svg' => 'svg__category_2'],
                ['title' => 'Шафи', 'svg' => 'svg__category_3'],
                ['title' => 'Дивани', 'svg' => 'svg__category_4'],
                ['title' => 'Столи', 'svg' => 'svg__category_5'],
                ['title' => 'Ліжка', 'svg' => 'svg__category_6']
            ];

            foreach ($categories as $category) {
                echo '<a class="category__item" href="chairs.php">';
                echo '<div class="category__title">' . $category['title'] . '</div>';
                echo '<div class="' . $category['svg'] . '"></div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>

<?php require "blocks/footer.php" ?>