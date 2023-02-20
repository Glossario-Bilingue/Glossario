<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmailSubmission</title>
</head>
<body>
    <h3>Olá, alguém enviou uma nova sugestão de termo!</h3>

    <!-- Conteúdo da página-->
    <section class="py-2">
        <div class="container px-5 p-5">
            <!-- Definição do termo -->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <!-- Termo -->
                <?php if(isset($termo)) :?>
                    <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Termo: </strong> <?php echo $termo ?> </p>
                        </div>
                <?php endif; ?>

                <!-- Sigla/ Acrônimo -->
                <?php if(isset($sigla)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Sigla: </strong> <?php echo $sigla ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Classe gramatical -->
                <?php if(isset($classe)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Classe gramatical: </strong> <?php echo $classe ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Plural -->
                <?php if(isset($plural)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Plural: </strong> <?php echo $plural ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Forma equivalente -->
                <?php if(isset($traducao)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Forma equivalente: </strong> <?php echo $traducao ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Tradução aplicada/ Definição -->
                <?php if(isset($definicao)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Tradução aplicada: </strong> <?php echo $definicao ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Área -->
                <?php if(isset($area)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Área: </strong> <?php echo $area ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Referencia -->
                <?php if(isset($referencia)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Referência: </strong> <?php echo $referencia ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Enviado por -->
                <?php if(isset($autor)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Sugerido por: </strong> <?php echo $autor ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- E-mail -->
                <?php if(isset($email)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>E-mail: </strong> <?php echo $email ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Data -->
                <?php if(isset($dia)) :?>
                    <div class="row gx-5">
                        <div class="col-lg-8 col-xl-4 text-right">
                            <p><strong>Enviado em: </strong> <?php echo $dia ?> </p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </section>
</body>
</html>