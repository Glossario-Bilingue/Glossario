<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Conteúdo da página-->
            <section class="py-2">
                <div class="container px-5">
                    <!-- Formulário de submissão-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <?php
                                    helper('form'); 
                                    echo form_open('Login/login')
                                ?>
                                    <!-- E-mail -->
                                    <div class="form-floating mb-3">
                                        <label for="email">E-mail</label>
                                        <input class="form-control" id="email" type="email" />
                                    </div>
                                    <!-- Senha -->
                                    <div class="form-floating mb-3">
                                        <label for="password">Senha</label>
                                        <input class="form-control" id="password" type="text" />
                                    </div>
                                    <!-- Botão Enviar -->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>

</html>
<!-- end document-->