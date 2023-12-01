<main><br>
    <section id="facts" class="facts">
        <div class="container">
            <div>
                <a href="<?php echo URL_BASE . "fornecedor/novo" ?>" type="submit" class="btn btn-primary">Novo</a>
            </div><br>
            <div class="card">
                <div class="card-header">
                    Lista de fornecedores
                </div>

                <div class="container mt-4">
                    <table class="table" id="datatablesSimple">
                        <thead>
                            <tr>
                                <td style="width: 30%;">Nome</td>
                                <td style="width: 20%;">Endereço</td>
                                <td style="width: 20%;">Cidade</td>
                                <td style="width: 10%;">Telefone</td>
                                <th class="acao-col" style="width: 20% !important;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Fabio</td>
                                <td>Rua goiania</td>
                                <td>Guaranta</td>
                                <td>66999539490</td>
                                <td>
                                    <a href="<?php echo URL_BASE . 'fornecedor/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fabio</td>
                                <td>Rua goiania</td>
                                <td>Guaranta</td>
                                <td>66999539490</td>
                                <td>
                                    <a href="<?php echo URL_BASE . 'fornecedor/editar/1' ?>" class="btn btn-warning btn-sm">Editar</a>
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