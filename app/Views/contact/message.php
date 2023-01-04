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

                    <!-- Formulário de contato-->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Entre em contato</h1>
                            <p class="lead fw-normal text-muted mb-0">Responderemos assim que possível.</p>
                        </div>

                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <form action="/contact/sendMessage" method="post">
                                    <!-- Nome -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text"/>
                                        <label for="name">Nome completo</label>
                                    </div>
                                    <!-- E-mail -->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" type="email" placeholder="nome@exemplo.com" data-sb-validations="required,email" />
                                        <label for="email">E-mail</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">É necessário informar um e-mail.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">E-mail inválido.</div>
                                    </div>
                                    <!-- Mensagem -->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" type="text" style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Mensagem</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Escreva uma mensagem.</div>
                                    </div>
                                    <!-- Mensagem de sucesso -->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Mensagem enviada com sucesso!</div>
                                        </div>
                                    </div>
                                    <!-- Mensagem de erro -->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar mensagem!</div></div>
                                    <!-- Botão Enviar -->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Enviar</button></div>
                                </form>

                                <!-- Retorno da validação e envio dos dados -->
                                <?php if(isset($mensagens)) echo $mensagens; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
