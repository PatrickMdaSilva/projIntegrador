<?php
$userDao = new UserDAO($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);

if ( $userData == true) {

?>
<div id="main-container" class="container-fluid ">
  <div id="main-container" class="container-fluid">
    <div class="col-md-12">
      <div class="row" id="auth-row">
        <div class="col-md-5" id="register-container">
          <div class="aside-cad">
            <h2 style="text-align: center;">Agradecemos sua doação!</h2>
            <p style="text-align: center;">É muito simples realizar uma doação em nossa plataforma. Preencha com cuidado o formulário ao lado. Essas informações são importantes, para saber qual livro você está doando.
            </p>
          </div>
        </div>
        <div class="col-md-5" id="register-container">
          <form action="<?= $BASE_URL ?>../app/process/user_process.php" method="POST" enctype="multipart/form-data" style="margin-top: 0;">
            <input type="hidden" name="type" value="createBook">
            <h2>Cadastrar livro</h2>
            <div class="form-group">
              <label for="name">Nome do livro:</label>
              <input type="text" class="form-control" id="name" name="name" required placeholder="Digite o nome do livro" value="">
            </div>
            <div class="form-group">
              <label for="ass">Estante:</label>
              <select class="form-select" aria-label="Default select example" name="ass" id="ass" required>
                <option selected value=""></option>
                <option value="Ação">Ação</option>
                <option value="Aventura">Avantura</option>
                <option value="Comédia">Comédia</option>
                <option value="Drama">Drama</option>
                <option value="Didatico">Didático</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Ficção">Ficção</option>
                <option value="Gibi">Gibi</option>
                <option value="Infantil">Infantil</option>
                <option value="Romance">Romance</option>
                <option value="Revista">Revista</option>
                <option value="Suspense">Suspense</option>
                <option value="Terror">Terror</option>
                <option value="Tragédia">Tragédia</option>
                <option value="Outro">Outro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="author">Autor:</label>
              <input type="text" class="form-control" id="author" name="author" required placeholder="Digite o author do livro" value="">
            </div>
            <div class="form-group">
              <label for="year">Data:</label>
              <input type="date" class="form-control" id="year" name="year" required placeholder="Escolha a data de publicação" value="">
            </div>
            <div class="form-group">
              <label for="edition">Edição:</label>
              <input type="number" class="form-control" id="edition" name="edition" required placeholder="Digite número da edição" value="">
            </div>
            <div class="form-group">
              <label for="name">Editora:</label>
              <input type="text" class="form-control" id="publish" name="publish" required placeholder="Digite o nome da editora " value="">
            </div>
            <div class="form-group">
              <label for="name">Nome do doador:</label>
              <input type="text" class="form-control" id="donor" name="donor" required placeholder="Digite seu nome" value="<?= $userData->name ?>">
            </div>
            <div class="form-group">
              <label for="contact">Contato do doador:</label>
              <input type="text" class="form-control" id="contact" name="contact" required minlength="10" maxlength="11"  placeholder="Digite o número do celular" value="">
            </div>
            <div class="form-group">
              <label for="image">Foto:</label>
              <input type="file" class="form-control-file" name="image" required>
            </div>
            <input type="submit" class="btn card-btn" value="Cadastrar">
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php 
} else {
  header("Location:" . "http://localhost/projIntegrador/public/index.php");
}