<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 py-2 pb-5">
                <!-- Caixa de texto -->
                <div class="bg-light rounded-3 py-2 px-4 px-md-3 mb-5">
                    <!-- Exibe diferente layout para administrativo -->
                    <?php if (session()->has('user')) :?>
                        <!-- Títulos -->
                        <div class="row gx-5">
                            <div class="col-lg-8 col-xl-4 text-left">
                                <h3><u>Termo</u></h3>
                            </div>
                            <div class="col-lg-8 col-xl-3 text-left">
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
                                <div class="col-lg-8 col-xl-3 text-left">
                                    <p class="font-weight-normal"><?php echo $dado['sigla'] ?></p>
                                </div>
                                <div class="col-lg-8 col-xl-3 text-left">
                                    <p class="font-weight-normal"><?php
                                                                    if ($dado['traducao'] == "estrangeirismo"){
                                                                        echo $dado['traducao'].'*';
                                                                    } else{
                                                                        echo $dado['traducao'];
                                                                    };
                                                                    ?></p>
                                </div>
                                <!-- Botões de edição administrativo -->
                                <div class="col-lg-8 col-xl-2 text-right">
                                    <a href="<?= site_url('formAdmin/update/'.$dado['id_termo']) ?>" class="btn btn-success btn-sm mx-2">&#9998;</a>
                                    <a href="<?= site_url('formAdmin/delete/'.$dado['id_termo']) ?>" class="btn btn-danger btn-sm mx-2">&#10006;</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else :?>
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
                                <div class="col-lg-8 col-xl-3 text-left">
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
                    <?php endif;?>
                    <!-- Legenda aparece somente se algum termo for um estrangeirismo -->
                    <p class="font-weight-light py-2">
                        <?php foreach ($dados as $dado){
                            if ($dado['traducao'] == "estrangeirismo"){
                                echo "* Estrangeirismo: o termo possui a mesma definição em português.";
                                break;
                            }
                        } ?>
                    </p>
                </div>
            </div>
        </section>
    </main>
</body>
                    