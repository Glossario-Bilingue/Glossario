<!DOCTYPE html>
<html lang="en">
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
                    <!-- Definição do termo -->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <!-- Termo -->
                        <div class="text-center mb-5">
                            <h1 class="display-4 font-weight-bold"><?php echo $dados['termo'] ?></h1>
                        </div>
                        <!-- Sigla/ Acrônimo -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Sigla/ Acrônimo</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['sigla'] ?></p>
                            </div>
                        </div>
                        <!-- Classe gramatical -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Classe gramatical</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['classe'] ?></p>
                            </div>
                        </div>
                        <!-- Plural -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Plural</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['plural'] ?></p>
                            </div>
                        </div>
                        <!-- Forma equivalente -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Forma equivalente</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['traducao'] ?></p>
                            </div>
                        </div>
                        <!-- Tradução aplicada/ Definição -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Tradução aplicada/ definição</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-justify">
                                <p class="font-weight-normal"><?php echo $dados['definicao'] ?></p>
                            </div>
                        </div>
                        <!-- Área -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Área</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['area'] ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Legenda aparece somente se o termo for um estrangeirismo -->
                    <?php if ($dados['traducao'] == "estrangeirismo") : ?>
                        <p class="font-weight-light">* Estrangeirismo: o termo possui a mesma definição em português.</p>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    </body>
</html>