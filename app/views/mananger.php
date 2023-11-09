<?php
$userDao = new UserDAO($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);

if ($userData == true && $userData->type == 1) {

    $type = filter_input(INPUT_POST, "type");
    if (!empty($_POST) && $type == "users") {
        $userValue = $userDao->countUser();
    } elseif(!empty($_POST) && $type == "donate") {
        $bookValue = $userDao->countBook();
        
        
    }
?>
    <div id="main-container" class="container-fluid ">
        <div id="main-container" class="container-fluid">
            <div class="col-md-12">
                <div class="row" id="auth-row">
                    <div class="col-md-5" id="register-container">
                        <form action="<?= $BASE_URL ?>../public/index.php?pag=mananger&folder=views" method="POST" style="margin-top: 0;">
                            <input type="hidden" name="type" value="users">
                            <h2>Número de Cadastrados</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" readonly value="<?= (isset($userValue[0])) ? "$userValue[0]" : ""; ?>">
                            </div>
                            <input type="submit" class="btn card-btn" value="Atualizar">
                        </form>
                    </div>
                    <div class="col-md-5" id="register-container">
                        <form action="<?= $BASE_URL ?>../public/index.php?pag=mananger&folder=views" method="POST" style="margin-top: 0;">
                            <input type="hidden" name="type" value="donate">
                            <h2>Número de Doações</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" readonly value="<?= (isset($bookValue[0])) ? "$bookValue[0]" : ""; ?>">
                            </div>
                            <input type="submit" class="btn card-btn" value="buscar">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    <?php
} else {
    header("Location:" . "http://localhost/projIntegrador/public/index.php");
}
