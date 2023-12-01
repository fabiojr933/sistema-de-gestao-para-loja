<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "categoria/index" ?>" type="submit" class="btn btn-primary">Voltar</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Editar categoria
                </div>
                <form action="<?php echo URL_BASE . "" ?>" method="POST">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Descrição</label>
                                <input  type="text" class="form-control" name="descricao" value="<?php echo $dados['descricao'] ?>">
                            </div>
                        </div><br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>


