<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "fluxo/index" ?>" type="submit" class="btn btn-primary">voltar</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Lista de fluxo financeiro
                </div>
                <form action="<?php echo URL_BASE . "" ?>" method="POST">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Descrição</label>
                                <input type="text" class="form-control" name="descricao" value="<?php echo $dados['descricao'] ?>">
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputState">Tipo</label>
                                <select class="form-control" name="tipo">
                                    <option>Receita</option>
                                    <option>Despesa</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Tipo de custo</label>
                                <select class="form-control" name="tipo_custo">
                                    <option>Variavel</option>
                                    <option>Fixa</option>
                                </select>
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>