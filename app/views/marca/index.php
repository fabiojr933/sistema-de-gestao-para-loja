
<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "unidade/novo" ?>" type="submit" class="btn btn-primary">Novo</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Lista de marca
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
                            <tr>
                                <td>Item 1</td>
                                <td>
                                <a href="<?php echo URL_BASE . 'marca/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Item 2</td>
                                <td>
                                <a href="<?php echo URL_BASE . 'marca/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
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