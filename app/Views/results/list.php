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
                    <!-- Caixa de texto -->
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <!-- Títulos -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-left">
                                <h3><u>Termo</u></h3>
                            </div>
                            <div class="col-lg-8 col-xl-4 text-left">
                                <h3><u>Sigla</u></h3>
                            </div>
                            <div class="col-lg-8 col-xl-4 text-left">
                                <h3><u>Forma equivalente</u></h3>
                            </div>
                        </div>
                        <!-- Lista de termos -->
                        <?php foreach ($dados as $dado) : ?>
                            <div class="row gx-5 py-3">
                                <div class="col-lg-8 col-xl-4 text-left">
                                    <p class="font-weight-bold"><a class="" href="/result/definition/<?php echo $dado['id_termo'] ?>"><?php echo $dado['termo'] ?></a></p>
                                </div>
                                <div class="col-lg-8 col-xl-4 text-left">
                                    <p class="font-weight-normal"><?php echo $dado['sigla'] ?></p>
                                </div>
                                <div class="col-lg-8 col-xl-4 text-left">
                                    <p class="font-weight-normal"><?php
                                                                    if ($dado['traducao'] == "estrangeirismo"){
                                                                        echo $dado['traducao'].'*';
                                                                    } else{
                                                                        echo $dado['traducao'];
                                                                    };
                                                                 ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Legenda aparece somente se algum termo for um estrangeirismo -->
                    <p class="font-weight-light">
                        <?php foreach ($dados as $dado){
                            if ($dado['traducao'] == "estrangeirismo"){
                                echo "* Estrangeirismo: o termo possui a mesma definição em português.";
                                break;
                            }
                        } ?>
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>