<?php require "blocks/header.php" ?>

<section class="section__1">
    <div class="container">
        <div class="section__header">
            <h3>Стільці</h3>
        </div>
        <div class="chair">
            <?php
            $chairs = [
                [
                    'image' => 'chair__image__1',
                    'title' => 'Стілець Білий',
                    'price' => '1488₴',
                    'status' => 'В наявності',
                    'url' => 'chair__white.php'
                ],
                [
                    'image' => 'chair__image__2',
                    'title' => 'Стілець Сірий',
                    'price' => '2023₴',
                    'status' => 'В наявності',
                    'url' => 'chair__grey.php'
                ],
                [
                    'image' => 'chair__image__3',
                    'title' => 'Стілець Чорний',
                    'price' => '4444₴',
                    'status' => 'В наявності',
                    'url' => 'chair__black.php'
                ]
            ];

            foreach ($chairs as $chair) {
                echo '<a class="chair__item" href="' . $chair['url'] . '">';
                echo '<div class="' . $chair['image'] . '"></div>';
                echo '<div class="chair__title">' . $chair['title'] . '</div>';
                echo '<div class="chair__price">' . $chair['price'] . '</div>';
                echo '<div class="chair__status">' . $chair['status'] . '</div>';
                echo '</a>';
            }
            ?>
        </div>
    </div>
</section>


<?php require "blocks/footer.php" ?>