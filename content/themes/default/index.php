<? $this->theme->header(); ?>

<body>
<!--block wrapper-->
<div class="wrapper">
    <!--header-->
    <div class="header">
        <a class="header__link-logo" href="/">
            <img src="/content/themes/default/res/logo.png" class="header__img-logo" alt="Библиотека кодера">
        </a>

        <div class="header__gradient-block"></div>

        <div class="header__description-block">
            <img class="header__img-description" src="/content/themes/default/res/logo2.png"
                 alt="Книги пр программированию в высоком качестве">
        </div>

        <div class="header__mobile">
            <div class="header__mob-menu-button mob-menu-button">
                <div class="mob-menu-button__hr"></div>
                <div class="mob-menu-button__hr"></div>
                <div class="mob-menu-button__hr"></div>
            </div>
            <a href="/" class="header__mobile-title">библиотека кодера</a>
        </div>
    </div>
    <!--header-->

    <!--main content wrapper-->
    <div class="main">

        <!--<div class="menubar">
            <div class="menubar__button">МЕНЮ</div>
            <div class="menubar__title">Меню</div>
            <ul class="menubar__item-block">
                [while]
                <li class="menubar__items"><a href="[href]" class="menubar__link">[link]</a></li>
                [while]
            </ul>
        </div>-->

        <!--content block-->
        <div class="content">
            <!--article block-->
            <? foreach ($books as $book): ?>

                <div class="book">
                    <a class="book__link" href="#">
                        <img class="book__img" src=<?= $book['cover_url'] ?> alt=<?= $book['title'] ?>
                             title=<?= $book['title'] ?>/>
                    </a>

                    <!--book description block-->
                    <div class="book__description book-description">
                        <h4 class="book__name">
                            <span class="book-description__name">Название: </span>
                            <span class="book-description__value"> <?= $book['title'] ?></span>
                        </h4>
                        <h4 class="book__author">
                            <span class="book-description__name">Автор: </span>
                            <span class="book-description__value">  <?= $book['author'] ?></span>
                        </h4>
                        <h4 class="book__year">
                            <span class="book-description__name">Год издания: </span>
                            <span class="book-description__value"><?= $book['year'] ?></span>
                        </h4>
                        <p class="book__content"><?= $book['text'] ?></p>
                        <a class="book__button" href="#">Подробнее >></a>
                        <a class="book__button book__button_margin"
                           href="/content/uploads/files/<?= $book['book_file'] ?>">Скачать</a>
                    </div>
                    <!--book description block-->
                </div>

            <? endforeach; ?>
            <!--article block-->
        </div>
        <!--content block-->

    </div>
    <!--main content wrapper-->

<? $this->theme->footer(); ?>