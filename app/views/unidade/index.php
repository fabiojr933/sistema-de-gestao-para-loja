<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "unidade/novo" ?>" type="submit" class="btn btn-primary">Novo</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Lista de unidade de medida
                </div>

                <div class="container mt-4">
                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th style="width: 80%;">Descrição</th>
                                <th class="acao-col" style="width: 20% !important;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dados as $unidade) { ?>
                                <tr>
                                    <td><?php echo $unidade->descricao ?></td>
                                    <td>
                                        <a href="<?php echo URL_BASE . 'unidade/editar/' . $unidade->id ?>" class="btn btn-warning btn-sm">Editar</a>
                                        <a href="<?php echo URL_BASE . 'unidade/excluir/' . $unidade->id ?>" class="btn btn-danger btn-sm">Excluir</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>