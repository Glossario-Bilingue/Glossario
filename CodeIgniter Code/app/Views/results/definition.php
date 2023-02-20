<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 p-5">
                <!-- Definição do termo -->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">

                    <!-- Termo -->
                    <div class="text-center mb-5">
                        <h1 class="display-4 font-weight-bold"><?php echo $dados['termo'] ?></h1>
                    </div>

                    <!-- Sigla/ Acrônimo -->
                    <?php if (isset($dados['sigla'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Sigla/ Acrônimo</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['sigla'] ?></p>
                            </div>
                        </div>
                    <?php endif;?>

                    <!-- Classe gramatical -->
                    <?php if (isset($dados['classe'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Classe gramatical</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['classe'] ?></p>
                            </div>
                        </div>
                    <?php endif;?>

                    <!-- Plural -->
                    <?php if (isset($dados['plural'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Plural</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['plural'] ?></p>
                            </div>
                        </div>
                    <?php endif;?>

                    <!-- Forma equivalente -->
                    <?php if (isset($dados['traducao'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Forma equivalente</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php
                                                                    if ($dados['traducao'] == "estrangeirismo"){
                                                                        echo $dados['traducao'].'*';
                                                                    } else{
                                                                        echo $dados['traducao'];
                                                                    };
                                                                    ?></p>
                            </div>
                        </div>
                    <?php endif;?>

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

                    <!-- Referência -->
                    <?php if (isset($dados['referencia'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Referência</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['referencia'] ?></p>
                            </div>
                        </div>
                    <?php endif;?>

                    <!-- Autor -->
                    <?php if (isset($dados['autor'])) :?>
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-right">
                                <p class="font-weight-bold">Sugerido por</p>
                            </div>
                            <div class="col-lg-8 col-xl-6 text-left">
                                <p class="font-weight-normal"><?php echo $dados['autor'] ?></p>
                            </div>
                        </div>
                    <?php endif;?>

                    <!-- Data da última atualização -->
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p class="font-weight-bold">Última atualização</p>
                        </div>
                        <div class="col-lg-8 col-xl-6 text-left">
                            <p class="font-weight-normal"><?php echo date('d-m-Y', strtotime($dados['dia'])) ?></p>
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