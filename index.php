<?php
include "php_components/header.php";
include "php_components/links.php";
include "php_components/portfolio.php"
?>

<main>
    <div class="about_me_block" id="about_me_block">
        <div class="info_text_block">
            <div class="title_info">Дарова, читатель! Я StarryMoon.</div>
            <div class="line_info"></div>
            <div class="text_info">На данном сайте размещена информация обо мне, <br> мое портфолио работ, полезные ссылки, <br> а также отзывы о самом сайте. :></div>
            <div class="text_info">Меня зовут Максим, мне 16 лет. В некоторых соц-сетях <br> был известен под пвсевдонимом Komaru.<br>
                Живу в Челябинской области в Трёхгорном <br> (страшное и никому неизвестное место). <br>
                Учусь на Frontend-developer (пока что уровень beginner)
            </div>
            <div class="text_info">Постоянно слушаю музыку (24/7), <br> играю в ПК игры, да и просто чиллю.</div>
            <div class="foor_text_info"><a href="#">Вернуться к меню?</a></div>
        </div>
    </div>
    <div class="social_links" id="social_links">
        <div class="links_blocks">
            <?php foreach ($links as $id => $item): ?>
                <a href="<?= htmlspecialchars($item['link'])?>" class="links" target="_blank">
                    <i class="<?= htmlspecialchars($item['logo']) ?>"></i>
                    <span>
                        <?= htmlspecialchars($item['name']) ?>
                    </span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="portfolio" id="portfolio">
        <div class="portfolio_cards">
            <?php foreach ($portfolio as $id => $item): ?>
            <div class="text_and_img">
                <div class="img_portfolio">
                    <img src="<?= htmlspecialchars($item['image'])?>" alt="">
                </div>
                <div class="portfolio_text">
                    <div class="portfolio_title"><?= htmlspecialchars($item['title'])?></div>
                    <div class="portfolio_description"><?= htmlspecialchars($item['description'])?></div>
                    <div class="portfolio_time">Время выполнения работы: <?= htmlspecialchars($item['time'])?></div>
                </div>
            </div>
            <a href="<?= htmlspecialchars($item['link'])?>" target="_blank" class="portfolio_button">Перейти</a>
            <?php endforeach; ?>
        </div>
    </div>
</main>