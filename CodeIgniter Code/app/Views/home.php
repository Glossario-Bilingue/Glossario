<body>
<div style="height: 300px;">
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 p-5">
                <!-- Quadro da mensagem -->
                <?php if(isset($erro) and !$erro):?>
                    <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- Mensagem de login com sucesso -->
                                <div class="text-left mb-5">
                                    <h6 class="fw-bolder text-success"><?= $message ?></h6>
                                    <br>
                                    <?php if(isset($data)) :?>
                                    <h6>Último acesso em <?= date('d-m-Y', strtotime($data)) ?></h6>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
</body>
