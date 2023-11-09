<?php
$user = new User();
$userDao = new UserDAO($conn, $BASE_URL);

$userData = $userDao->verifyToken(true);
$fullName = $user->getFullName($userData);

?>
<div id="main-container" class="container-fluid ">
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-5" id="register-container">
                    <div class="aside-cad">
                        <h2 style="text-align: center;">Olá!</h2>
                        <p style="text-align: center;">Ficamos feliz por você querer usar nossa plataforma. Vamos adicionar um nome e sobrenome a sua conta. Dessa forma podemos saber mais sobre você.
                        </p>
                    </div>
                </div>
                <div class="col-md-5" id="register-container">
                    <form action="<?= $BASE_URL ?>../app/process/user_process.php" method="POST" enctype="multipart/form-data" style="margin-top: 0;">
                        <input type="hidden" name="type" value="update">
                        <h2>Usuário</h2>
                        <div class="form-group">
                            <label for="email">Conta vinculada</label>
                            <input type="text" readonly class="form-control disabled" id="email" name="email" value="<?= $userData->email ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" value="<?= $userData->name ?>">
                        </div>
                        <div class="form-group">
                            <label for="lastname">Sobrenome:</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu nome" value="<?= $userData->lastname ?>">
                        </div>
                        <input type="submit" class="btn card-btn" value="Editar">
                    </form>
                </div>
                
            </div>
        </div>
    </div>

