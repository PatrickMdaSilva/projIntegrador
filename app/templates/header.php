<?php
require_once(dirname(__DIR__) . "../globals.php");
require_once(dirname(__DIR__) . "/db/db.php");
require_once(dirname(__DIR__) . "/models/Message.php");
require_once(dirname(__DIR__) . "/dao/UserDAO.php");

$message = new Message($BASE_URL);

$flassMessage = $message->getMessage();

if (!empty($flassMessage["msg"])) {
  //limpar a mensagem
  $message->clearMessage();
}

$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(false);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=""><!--Descrição do site-->
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/style.css">
  <script src="assets/js/bootstrap.min.js" defer></script>
  <script src="assets/js/index.js" defer></script>
  <title>SDDL</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg" style="background-color:#49acf7;">
      <div class="container-fluid nav" id="nav-a">
        <a class="navbar-brand text-white col-2" href="<?= $BASE_URL ?>index.php">
          <h1>SDDL</h1>
        </a>
        <button class="navbar-toggler" style="background-color: #fff" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active text-white" aria-current="page" href="<?= $BASE_URL ?>index.php">Home</a>
            <li class="nav-item">
              <a class="nav-link text-white" href="<?= $BASE_URL ?>index.php?pag=asservo&folder=views">Acervo</a>
            </li>
            <?php if ($userData) : ?>
              <li class="nav-item">
                <a href="<?= $BASE_URL ?>index.php?pag=showFormat&folder=views" class="nav-link text-white bold">Doado</a>
              </li>
              <li class="nav-item">
                <a href="<?= $BASE_URL ?>index.php?pag=flagDonate&folder=views" class="nav-link text-white"></i>Solicitado</a>
              </li>
              <li class="nav-item">
                <a href="<?= $BASE_URL ?>index.php?pag=book&folder=views" class="nav-link text-white">Cadastrar livro</a>
              </li>
              <?php if ($userData->type == 1) : ?>
                <li class="nav-item">
                  <a href="<?= $BASE_URL ?>index.php?pag=mananger&folder=views" class="nav-link" style="color: purple; font-weight:bold">Gerenciar</a>
                </li>
              <?php endif; ?>
              <li class="nav-item">
                <a href="<?= $BASE_URL ?>index.php?pag=logout&folder=views" class="nav-link text-white">Logout</a>
              </li>
            <?php else : ?>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?= $BASE_URL ?>index.php?pag=account&folder=views">Cadastrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="<?= $BASE_URL ?>index.php?pag=auth&folder=views">Entrar</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php if (!empty($flassMessage["msg"])) : ?>
    <div class="msg-container">
      <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
  <?php endif; ?>