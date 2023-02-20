<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmailSubmission</title>
</head>
<body>
    <h3>Olá, alguém enviou uma nova mensagem pelo site do Dicionário Bilíngue de Informática</h3>

    <!-- Conteúdo da página-->
    <section class="py-2">
        <div class="container px-5 p-5">
            <!-- Definição do termo -->
            <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                <!-- Nome -->
                <div class="row gx-5">
                    <div class="col-lg-8 col-xl-4 text-right">
                        <p><strong>Nome: </strong> <?= $name ?> </p>
                    </div>
                </div>

                <!-- E-mail -->
                <div class="row gx-5">
                    <div class="col-lg-8 col-xl-4 text-right">
                        <p><strong>E-mail: </strong> <?= $email ?> </p>
                    </div>
                </div>

                <!-- Data -->
                <div class="row gx-5">
                    <div class="col-lg-8 col-xl-4 text-right">
                        <p><strong>Enviado em: </strong> <?= $dia ?> </p>
                    </div>
                </div>

                <!-- Mensagem -->
                <div class="row gx-5">
                    <div class="col-lg-8 col-xl-4 text-right">
                        <p><strong>Mensagem: </strong> <?= $message ?> </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>