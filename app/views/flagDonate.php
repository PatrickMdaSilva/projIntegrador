<?php

require_once(dirname(__DIR__)."/dao/BookDAO.php");


$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);
$id = $userData->id_user;

$bookDao = new BookDAO($conn, $BASE_URL);
$lastBooks = $bookDao->wantBook($userData);

?>

<div id="main-container" class="container-fluid">
    <?php if ($lastBooks != null) { ?>
        <h2 class="section-title">Doação Solicitada</h2>
        <p class="section-description">Doações devem ser solicitadas em até 48 horas </p>
        <div class="book-container">
            <?php foreach ($lastBooks as $book) : ?>
                <div class="card book-card" style="margin-top: 15px;">
                    <div class="card-img-top" style="background-image: url('<?= dirname($BASE_URL) ?>/app/books/<?= $book->image ?>'); background-repeat: no-repeat;"></div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $book->name ?></h5>
                        <h5 class="card-title">Autor:<?= $book->author ?></h5>
                        <a href="">
                            <form action="<?= $BASE_URL ?>../app/process/user_process.php" method="POST">
                                <input type="hidden" name="type" value="off-donate">
                                <input type="hidden" name="id" value="<?= $book->id_book ?>">
                                <input type="submit" value="Doar novamente" class="">
                            </form>
                        </a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    <?php } else { ?>
        <h2 class="section-title">Nenhuma solicitação nesse momento.</h2>
    <?php } ?>
</div>