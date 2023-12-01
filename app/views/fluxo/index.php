
<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "fluxo/novo" ?>" type="submit" class="btn btn-primary">Novo</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Lista de fluxo financeiro
                </div>

                <div class="container mt-4">
                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Descrição</th>
                                <th style="width: 20%;">Tipo</th>
                                <th style="width: 20%;">Tipo custo</th>
                                <th class="acao-col" style="width: 20% !important;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Item 1</td>
                                <td>Despesa</td>
                                <td>Fixo</td>
                                <td>
                                <a href="<?php echo URL_BASE . 'fluxo/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Item 2</td>
                                <td>Receita</td>
                                <td>Variavel</td>
                                <td>
                                <a href="<?php echo URL_BASE . 'fluxo/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>