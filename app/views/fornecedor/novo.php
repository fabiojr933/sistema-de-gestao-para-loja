<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "fornecedor/index" ?>" type="submit" class="btn btn-primary">Voltar</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Cadastro de fornecedor
                </div>
                <form action="<?php echo URL_BASE . "" ?>" method="POST">
                    <div class="card-body">

                        <div class="col-sm-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo" value="fisica">
                                <label class="form-check-label" for="inlineRadio1">Fisica</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipo" id="tipo" value="juridica">
                                <label class="form-check-label" for="inlineRadio1">Juridica</label>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6" id="cpf">
                                <label>CPF</label>
                                <input type="number" class="form-control" name="cpf">
                            </div>
                            <div class="form-group col-md-6" id="cnpj">
                                <label>CNPJ</label>
                                <input type="number" class="form-control" name="cnpj">
                            </div>
                            <div class="form-group col-md-6" id="ie">
                                <label>IE</label>
                                <input type="number" class="form-control" name="ie">
                            </div>
                            <div class="form-group col-md-6" id="rg">
                                <label>RG</label>
                                <input type="number" class="form-control" name="rg">
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control" name="email">
                            </div>                            
                            <div class="form-group col-md-6">
                                <label>Telefone</label>
                                <input type="tel" class="form-control" name="telefone">
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Cep</label>
                                <input type="text" class="form-control" name="cep">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Rua</label>
                                <input type="text" class="form-control" name="rua" id="rua">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Numero</label>
                                <input type="text" class="form-control" name="numero" id="numero">
                            </div>
                        </div><br>


                        <div class="row">
                            <div class="form-group col-md-3">
                                <label>Bairro</label>
                                <input type="text" class="form-control" name="bairro" id="bairro">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="cidade">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Estado</label>
                                <input type="text" class="form-control" name="estado" id="estado">
                            </div>
                        </div><br>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Complemento</label>
                                <input type="text" class="form-control" name="complemento">
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>