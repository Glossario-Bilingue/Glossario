<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Conteúdo da página-->
        <section class="py-2">
            <div class="container px-5 p-5">
                <!-- Formulário de submissão-->
                <div class="bg-light rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Inserção de novo termo</h1>
                    </div>
                    <?php if(isset($erro)):?>
                        <div class="text-left mb-5">
                            <h6 class="fw-bolder text-danger"><?= $erro->listErrors() ?></h6>
                        </div>
                    <?php endif; ?>
                    <?php if(isset($success)):?>
                        <div class="text-center mb-5">
                            <h6 class="fw-bolder text-success">Termo salvo com sucesso</h6>
                        </div>
                    <?php endif; ?>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <?php
                                helper('form'); 
                                echo form_open('/formAdmin/save/')
                            ?>
                                <!-- Id do termo fica oculto, consta aqui apenas para permitir edição -->
                                <input name="id_termo" type="hidden" value="<?php
                                                                                if (isset($id_termo)){
                                                                                    echo $id_termo;
                                                                                } else {
                                                                                    echo old('id_termo');
                                                                                }
                                                                            ?>">

                                <!-- Termo -->
                                <div class="form-floating mb-3">
                                    <label for="termo">Termo</label>
                                    <input class="form-control" name="termo" id="termo" type="text" value="<?php
                                                                                                                if (isset($termo)){
                                                                                                                    echo $termo;
                                                                                                                } else {
                                                                                                                    echo old('termo');
                                                                                                                }
                                                                                                            ?>">                                      
                                </div>
                                <!-- Sigla/ Acrônimo -->
                                <div class="form-floating mb-3">
                                    <label for="sigla">Sigla/ Acrônimo</label>
                                    <input class="form-control" name="sigla" id="sigla" type="text" value="<?php
                                                                                                                if (isset($sigla)){
                                                                                                                    echo $sigla;
                                                                                                                } else {
                                                                                                                    echo old('sigla');
                                                                                                                }
                                                                                                            ?>">                                        
                                </div>
                                <!-- Classe gramatical -->
                                <div class="form-floating mb-3">
                                    <label for="classe_gramatical">Classe gramatical</label>
                                    <input class="form-control" name="classe_gramatical" id="classe_gramatical" type="text" value="<?php
                                                                                                                                        if (isset($classe)){
                                                                                                                                            echo $classe;
                                                                                                                                        } else {
                                                                                                                                            echo old('classe_gramatical');
                                                                                                                                        }
                                                                                                                                    ?>">  
                                </div>
                                <!-- Plural -->
                                <div class="form-floating mb-3">
                                    <label for="plural">Plural</label>
                                    <input class="form-control" name="plural" id="plural" type="text" value="<?php
                                                                                                                if (isset($plural)){
                                                                                                                    echo $plural;
                                                                                                                } else {
                                                                                                                    echo old('plural');
                                                                                                                }
                                                                                                            ?>">                                        
                                </div>
                                <!-- Forma equivalente -->
                                <div class="form-floating mb-3">
                                    <label for="forma_equivalente">Forma equivalente</label>
                                    <input class="form-control" name="forma_equivalente" id="forma_equivalente" type="text" value="<?php
                                                                                                                                        if (isset($traducao)){
                                                                                                                                            echo $traducao;
                                                                                                                                        } else {
                                                                                                                                            echo old('forma_equivalente');
                                                                                                                                        }
                                                                                                                                    ?>">
                                </div>
                                <!-- Tradução aplicada/ Definição -->
                                <div class="form-floating mb-3">
                                    <label for="definicao">Tradução aplicada/ Definição</label>
                                    <textarea class="form-control" name="definicao" id="definicao" type="text" style="height: 10rem" >  <?php
                                                                                                                                            if (isset($definicao)){
                                                                                                                                                echo $definicao;
                                                                                                                                            } else {
                                                                                                                                                echo old('definicao');
                                                                                                                                            }
                                                                                                                                        ?></textarea>                                        
                                </div>
                                <!-- Área -->
                                <div class="form-floating mb-3">
                                    <label for="area">Área</label>
                                    <select name="area" id="area" >
                                        <option value="geral"   <?php
                                                                    if((isset($area) and ($area == "geral")) or (old('area') == "geral")){echo "selected";}
                                                                ?>>Geral</option>
                                        <option value="hardware" <?php
                                                                    if((isset($area) and ($area == "hardware")) or (old('area') == "hardware")){echo "selected";}
                                                                ?>>Hardware</option>
                                        <option value="rede"    <?php 
                                                                    if((isset($area) and ($area == "rede")) or (old('area') == "rede")){echo "selected";} 
                                                                ?>>Rede</option>
                                        <option value="software" <?php 
                                                                    if((isset($area) and ($area == "software")) or (old('area') == "software")){echo "selected";} 
                                                                ?>>Software</option>
                                    </select>                                        
                                </div>

                                <!-- Referência -->
                                <div class="form-floating mb-3">
                                    <label for="plural">Referência</label>
                                    <input class="form-control" name="referencia" id="referencia" type="text" value="<?php
                                                                                                                if (isset($referencia)){
                                                                                                                    echo $referencia;
                                                                                                                } else {
                                                                                                                    echo old('referencia');
                                                                                                                }
                                                                                                            ?>">
                                                                                                            
                                <!-- Autor -->
                                <div class="form-floating mb-3">
                                    <label for="plural">Sugerido por</label>
                                    <input class="form-control" name="autor" id="autor" type="text" value="<?php
                                                                                                                if (isset($autor)){
                                                                                                                    echo $autor;
                                                                                                                } else {
                                                                                                                    echo old('autor');
                                                                                                                }
                                                                                                            ?>">

                                <!-- Botões -->
                                <div class="d-flex justify-content-between pt-2">
                                    <button class="btn btn-cancel btn-lg disabled" id="submitButton" type="cancel" formnovalidate>Cancelar</button>
                                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Salvar</button>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>