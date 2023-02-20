<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 p-5">

                <!-- Formulário de contato-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Entre em contato</h1>
                        <p class="lead fw-normal text-muted mb-0">Responderemos assim que possível.</p>
                    </div>

                    <!-- Lista de erros -->
                    <?php if(isset($erro)):?>
                        <div class="text-left mb-5">
                            <h6 class="fw-bolder text-danger"><?= $erro->listErrors() ?></h6>
                        </div>
                    <?php endif; ?>

                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <?php helper('form') ?>
                            <?= form_open('emailMessage') ?>
                                <!-- Nome -->
                                <div class="form-floating mb-3">
                                    <label for="name">Nome</label>
                                    <input class="form-control" name="name" id="name" type="text" value="<?php
                                                                                                            if (isset($name)){
                                                                                                                echo $name;
                                                                                                            } else {
                                                                                                                echo old('name');
                                                                                                            }
                                                                                                        ?>"/>
                                </div>
                                <!-- E-mail -->
                                <div class="form-floating mb-3">
                                    <label for="email">E-mail</label>
                                    <input class="form-control" name="email" id="email" type="email" placeholder="nome@exemplo.com" value="<?php
                                                                                                                                            if (isset($email)){
                                                                                                                                                echo $email;
                                                                                                                                            } else {
                                                                                                                                                echo old('email');
                                                                                                                                            }
                                                                                                                                        ?>"/>
                                </div>
                                <!-- Mensagem -->
                                <div class="form-floating mb-3">
                                    <label for="message">Mensagem</label>
                                    <textarea class="form-control" name="message" id="message" type="text" style="height: 10rem"><?php
                                                                                                                                    if (isset($message)){
                                                                                                                                        echo $message;
                                                                                                                                    } else {
                                                                                                                                        echo old('message');
                                                                                                                                    }
                                                                                                                                ?></textarea>
                                </div>
                                <!-- Botão Enviar -->
                                <div class="d-flex justify-content-between pt-2">
                                    <button class="btn btn-cancel btn-lg disabled" id="submitButton" type="cancel" formnovalidate>Cancelar</button>
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
