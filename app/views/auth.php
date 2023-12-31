<div id="main-container" class="container-fluid ">
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-5" id="register-container">
                    <div class="aside-cad">
                        <h2 style="text-align: center;">Olá Leitor!</h2>
                        <p style="text-align: center;">Por que doar livros? Levar conhecimento e cultura para outras pessoas, sobretudo para aquelas que não tem condições de comprarem livros</span></a>.
                        </p>
                    </div>
                </div>
                <div class="col-md-5" id="login-container">
                    <h2>Acesso a conta</h2>
                    <form action="<?= $BASE_URL ?>../app/process/auth_process.php" method="POST">
                        <input type="hidden" name="type" value="login">
                        <div class="form-group">
                            <label for="email">E-mail:</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                        </div>
                        <input type="submit" value="Entrar" class="btn card-btn">
                    </form>
                    <p style="text-align: center;">Esqueceu sua senha? Vamos ajudar você!</p>
                    <a href="index.php?pag=forget_mail&folder=views"><input value="Esqueceu a senha" class="btn card-btn"></a>
                </div>
            </div>
        </div>
    </div>
</div>