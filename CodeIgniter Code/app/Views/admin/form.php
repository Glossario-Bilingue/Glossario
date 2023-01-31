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
                            <h1 class="fw-bolder">Inserção de novo termo</h1>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <?php
                                    helper('form'); 
                                    echo form_open('/form/save/')
                                ?>
                                    <!-- Termo -->
                                    <div class="form-floating mb-3">
                                        <label for="termo">Termo</label>
                                        <input class="form-control" name="termo" id="termo" type="text" />                                        
                                    </div>
                                    <!-- Sigla/ Acrônimo -->
                                    <div class="form-floating mb-3">
                                        <label for="sigla">Sigla/ Acrônimo</label>
                                        <input class="form-control" name="sigla" id="sigla" type="text" />                                        
                                    </div>
                                    <!-- Classe gramatical -->
                                    <div class="form-floating mb-3">
                                        <label for="classe_gramatical">Classe gramatical</label>
                                        <input class="form-control" name="classe_gramatical" id="classe_gramatical" type="text" />
                                    </div>
                                    <!-- Plural -->
                                    <div class="form-floating mb-3">
                                        <label for="plural">Plural</label>
                                        <input class="form-control" name="plural" id="plural" type="text" />                                        
                                    </div>
                                    <!-- Forma equivalente -->
                                    <div class="form-floating mb-3">
                                        <label for="forma_equivalente">Forma equivalente</label>
                                        <input class="form-control" name="forma_equivalente" id="forma_equivalente" type="text" />                                        
                                    </div>
                                    <!-- Tradução aplicada/ Definição -->
                                    <div class="form-floating mb-3">
                                        <label for="definicao">Tradução aplicada/ Definição</label>
                                        <textarea class="form-control" name="definicao" id="definicao" type="text" style="height: 10rem"></textarea>                                        
                                    </div>
                                    <!-- Área -->
                                    <div class="form-floating mb-3">
                                        <label for="area">Área</label>
                                        <select name="area" id="area">
                                            <option value="geral">Geral</option>
                                            <option value="hardware">Hardware</option>
                                            <option value="rede">Rede</option>
                                            <option value="software">Software</option>
                                        </select>                                        
                                    </div>
                                    <!-- Botão Enviar -->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Salvar</button></div>
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