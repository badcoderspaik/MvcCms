<? $this->theme->header(); ?>

<h3>Список книг</h3>

<? foreach ($books as $book): ?>

    <h4> <?= $book['title'] ?> </h4>

<? endforeach; ?>

<? $this->theme->footer(); ?>
