
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 p-5">
                <!-- Formulário de submissão-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <?php
                                helper('form'); 
                                echo form_open('session/login/')
                            ?>
                                <!-- E-mail -->
                                <div class="form-floating mb-3">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" id="email" name="email" type="email" />
                                </div>
                                <!-- Senha -->
                                <div class="form-floating mb-3">
                                    <label for="password">Senha</label>
                                    <input class="form-control" id="password" name="senha" type="password" />
                                </div>
                                <!-- Botão Enviar -->
                                <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                            <?= form_close() ?>
                            <!-- Mensagem de erro -->
                            <?php if(isset($erro) and $erro):?>
                                <div class="text-left mb-5">
                                    <h6 class="fw-bolder text-danger">Usuário ou senha inválidos.</h6>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
