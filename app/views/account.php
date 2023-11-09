<div id="main-container"class="container-fluid ">
    <div id="main-container" class="container-fluid">
        <div class="col-md-12">
            <div class="row" id="auth-row">
                <div class="col-md-5" id="register-container">
                    <div class="aside-cad">
                    <h2 style="text-align: center;">Olá! Leitor</h2>
                        <p style="text-align: center;">Sempre temos algum livro que ja lemos e está apenas acumulando poeira em uma estante, certo? Já imaginou que, se cada um de nós passase esse material para frente! Poderemos sempre difundir o conhecimento e valorizar a leitura. <span>Se cadastre é rapidinho</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-5" id="register-container">
                    <h2>Criar conta</h2>
                    <form action="<?= $BASE_URL ?>../app/process/auth_process.php" method="POST">
                        <input type="hidden" name="type" value="register">
                        <div class="form-group">
                            <label for="email">E-mail: Ex: pessoa@conta.com</label>
                            <input type="text" class="form-control" id="email" name="email" required placeholder="Digite seu e-mail" >
                        </div>
                        <div class="form-group">
                            <label for="password">Senha: Utilizar apenas letras sem acento e números.</label>
                            <input type="password" class="form-control" id="password" name="password" required  minlength="4" maxlength="6" placeholder="Digite sua senha entre 4 a 6 caracteres" >
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Confirmação de senha:</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required placeholder="Confirme sua senha">
                        </div>
                        <input type="submit" value="Registrar" class="btn card-btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>