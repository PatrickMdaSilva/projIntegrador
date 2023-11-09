<?php

require("../app/dao/BookDAO.php");
$bookDao = new BookDAO($conn, $BASE_URL);
$lastBooks = $bookDao->buscarBook();

//print_r($lastBooks);

?>
<div id="main-container" class="container-fluid">
  <?php if ($lastBooks != null) { ?>
    <h2 class="section-title">Nossos livros</h2>
    <?php if (isset($userData) && $userData == true) { ?>
    <?php }else { ?>
      <p class="section-description">Cadastre-se e para ter acesso ao contato de nossos doadores.</p>
    <?php } ?>
    <div class="book-container">
      <?php foreach ($lastBooks as $book) : ?>
        <div class="card book-card" style="margin-top: 15px;">
          <div class="card-img-top" style="background-image:url('<?= dirname($BASE_URL) ?>/app/books/<?= $book->image ?>'); background-repeat: no-repeat;"></div>
          <div class="card-body">
            <?php if (isset($userData) && $userData == true) { ?>
              <h5 class="card-title">Cel: <?= $model->formatTel($book->contact);  ?></h5>
            <?php } ?>
            <h5 class="card-title"><?= $book->name ?></h5>
            <h5 class="card-title">Tipo: <?= $book->ass ?></h5>
            <h5 class="card-title">Ano: <?= substr($book->year, 0, 4) ?></h5>
            <h5 class="card-title">Autor: <?= $book->author ?></h5>
            <a href="">
              <?php if (isset($userData) && $userData == true) { ?>
                <form action="<?= $BASE_URL ?>../app/process/user_process.php" method="POST">
                  <input type="hidden" name="type" value="on-donate">
                  <input type="hidden" name="id" value="<?= $book->id_book ?>">
                  <input type="submit" value="interessado" class="">
                </form>
              <?php } ?>
            </a>
          </div>
        </div>
      <?php endforeach ?>
    <?php } else { ?>
      <h2 class="section-title">Nossos livros</h2>
      <p class="section-description">Não temos livros para doação nesse momento.</p>
    <?php } ?>
    </div>
</div>