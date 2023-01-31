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
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Sugira um novo termo</h1>
                            <p class="lead fw-normal text-muted mb-0">Preencha os campos que desejar e analisaremos a sua sugestão.</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <?php
                                    helper('form'); 
                                    echo form_open('Login/login')
                                ?>
                                    <!-- Nome -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nome" type="text" />
                                        <label for="nome">Nome</label>
                                    </div>
                                    <!-- E-mail -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="nome@email.com" />
                                        <label for="email">E-mail</label>
                                    </div>
                                    <!-- Termo -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="termo" type="text" />
                                        <label for="termo">Termo</label>
                                    </div>
                                    <!-- Sigla/ Acrônimo -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="sigla" type="text" />
                                        <label for="sigla">Sigla/ Acrônimo</label>
                                    </div>
                                    <!-- Classe gramatical -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="classe_gramatical" type="text" />
                                        <label for="classe_gramatical">Classe gramatical</label>
                                    </div>
                                    <!-- Plural -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="plural" type="text" />
                                        <label for="plural">Plural</label>
                                    </div>
                                    <!-- Forma equivalente -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="forma_equivalente" type="text" />
                                        <label for="forma_equivalente">Forma equivalente</label>
                                    </div>
                                    <!-- Tradução aplicada/ Definição -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="definicao" type="text" style="height: 10rem"></textarea>
                                        <label for="definicao">Tradução aplicada/ Definição</label>
                                    </div>
                                    <!-- Área -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="area" type="text" />
                                        <label for="area">Área</label>
                                    </div>
                                    <!-- Mensagem de sucesso -->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Mensagem enviada com sucesso!</div>
                                        </div>
                                    </div>
                                    <!-- Mensagem de erro -->
                                    <div class="d-none" id="submitErrorMessage">
                                        <div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div>
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