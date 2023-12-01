<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="<?php

              echo URL_BASE ?>assets/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css"></script>


</head>

<body>

  <body class="sb-nav-fixed">
    <?php include_once("topo.php"); ?>
    <div id="layoutSidenav">

      <div id="layoutSidenav_content">

        <?php include_once("menu.php"); ?>

        <?php $this->load($view, $viewData); ?>


        <?php include_once("rodape.php"); ?>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo URL_BASE ?>assets/assets/demo/chart-area-demo.js"></script>
    <script src="<?php echo URL_BASE ?>assets/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $(document).ready(function() {
        $('#datatablesSimple').DataTable();
      });
    </script>

    <script>
      var table = new DataTable('#datatablesSimple', {
        language: {
          "emptyTable": "Nenhum registro encontrado",
          "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
          "infoEmpty": "Mostrando 0 até 0 de 0 registros",
          "infoFiltered": "(Filtrados de _MAX_ registros)",
          "infoThousands": ".",
          "loadingRecords": "Carregando...",
          "processing": "Processando...",
          "zeroRecords": "Nenhum registro encontrado",
          "search": "Pesquisar",
          "paginate": {
            "next": "Próximo",
            "previous": "Anterior",
            "first": "Primeiro",
            "last": "Último"
          },
          "aria": {
            "sortAscending": ": Ordenar colunas de forma ascendente",
            "sortDescending": ": Ordenar colunas de forma descendente"
          },
          "select": {
            "rows": {
              "_": "Selecionado %d linhas",
              "1": "Selecionado 1 linha"
            },
            "cells": {
              "1": "1 célula selecionada",
              "_": "%d células selecionadas"
            },
            "columns": {
              "1": "1 coluna selecionada",
              "_": "%d colunas selecionadas"
            }
          },
          "buttons": {
            "copySuccess": {
              "1": "Uma linha copiada com sucesso",
              "_": "%d linhas copiadas com sucesso"
            },
            "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
            "colvis": "Visibilidade da Coluna",
            "colvisRestore": "Restaurar Visibilidade",
            "copy": "Copiar",
            "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
            "copyTitle": "Copiar para a Área de Transferência",
            "csv": "CSV",
            "excel": "Excel",
            "pageLength": {
              "-1": "Mostrar todos os registros",
              "_": "Mostrar %d registros"
            },
            "pdf": "PDF",
            "print": "Imprimir"
          },
          "autoFill": {
            "cancel": "Cancelar",
            "fill": "Preencher todas as células com",
            "fillHorizontal": "Preencher células horizontalmente",
            "fillVertical": "Preencher células verticalmente"
          },
          "lengthMenu": "Exibir _MENU_ resultados por página",
          "searchBuilder": {
            "add": "Adicionar Condição",
            "button": {
              "0": "Construtor de Pesquisa",
              "_": "Construtor de Pesquisa (%d)"
            },
            "clearAll": "Limpar Tudo",
            "condition": "Condição",
            "conditions": {
              "date": {
                "after": "Depois",
                "before": "Antes",
                "between": "Entre",
                "empty": "Vazio",
                "equals": "Igual",
                "not": "Não",
                "notBetween": "Não Entre",
                "notEmpty": "Não Vazio"
              },
              "number": {
                "between": "Entre",
                "empty": "Vazio",
                "equals": "Igual",
                "gt": "Maior Que",
                "gte": "Maior ou Igual a",
                "lt": "Menor Que",
                "lte": "Menor ou Igual a",
                "not": "Não",
                "notBetween": "Não Entre",
                "notEmpty": "Não Vazio"
              },
              "string": {
                "contains": "Contém",
                "empty": "Vazio",
                "endsWith": "Termina Com",
                "equals": "Igual",
                "not": "Não",
                "notEmpty": "Não Vazio",
                "startsWith": "Começa Com"
              },
              "array": {
                "contains": "Contém",
                "empty": "Vazio",
                "equals": "Igual à",
                "not": "Não",
                "notEmpty": "Não vazio",
                "without": "Não possui"
              }
            },
            "data": "Data",
            "deleteTitle": "Excluir regra de filtragem",
            "logicAnd": "E",
            "logicOr": "Ou",
            "title": {
              "0": "Construtor de Pesquisa",
              "_": "Construtor de Pesquisa (%d)"
            },
            "value": "Valor",
            "leftTitle": "Critérios Externos",
            "rightTitle": "Critérios Internos"
          },
          "searchPanes": {
            "clearMessage": "Limpar Tudo",
            "collapse": {
              "0": "Painéis de Pesquisa",
              "_": "Painéis de Pesquisa (%d)"
            },
            "count": "{total}",
            "countFiltered": "{shown} ({total})",
            "emptyPanes": "Nenhum Painel de Pesquisa",
            "loadMessage": "Carregando Painéis de Pesquisa...",
            "title": "Filtros Ativos"
          },
          "thousands": ".",
          "datetime": {
            "previous": "Anterior",
            "next": "Próximo",
            "hours": "Hora",
            "minutes": "Minuto",
            "seconds": "Segundo",
            "amPm": [
              "am",
              "pm"
            ],
            "unknown": "-",
            "months": {
              "0": "Janeiro",
              "1": "Fevereiro",
              "10": "Novembro",
              "11": "Dezembro",
              "2": "Março",
              "3": "Abril",
              "4": "Maio",
              "5": "Junho",
              "6": "Julho",
              "7": "Agosto",
              "8": "Setembro",
              "9": "Outubro"
            },
            "weekdays": [
              "Domingo",
              "Segunda-feira",
              "Terça-feira",
              "Quarta-feira",
              "Quinte-feira",
              "Sexta-feira",
              "Sábado"
            ]
          },
          "editor": {
            "close": "Fechar",
            "create": {
              "button": "Novo",
              "submit": "Criar",
              "title": "Criar novo registro"
            },
            "edit": {
              "button": "Editar",
              "submit": "Atualizar",
              "title": "Editar registro"
            },
            "error": {
              "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
            },
            "multi": {
              "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
              "restore": "Desfazer alterações",
              "title": "Multiplos valores",
              "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais."
            },
            "remove": {
              "button": "Remover",
              "confirm": {
                "_": "Tem certeza que quer deletar %d linhas?",
                "1": "Tem certeza que quer deletar 1 linha?"
              },
              "submit": "Remover",
              "title": "Remover registro"
            }
          },
          "decimal": ","
        },
      });
    </script>


    <script>
      $(document).ready(function() {
        // Oculta inicialmente os campos CPF e CNPJ
        $('#cpf').hide();
        $('#cnpj').hide();
        $('#ie').hide();
        $('#rg').hide();

        // Adiciona um evento de mudança no radio button
        $('input[name="tipo"]').change(function() {
          // Verifica qual tipo foi selecionado
          if ($(this).val() === 'fisica') {
            // Se for Física, esconde o campo CNPJ e mostra o campo CPF
            $('#cnpj').hide();
            $('#ie').hide();
            $('#cpf').show();
            $('#rg').show();
          } else if ($(this).val() === 'juridica') {
            // Se for Jurídica, esconde o campo CPF e mostra o campo CNPJ
            $('#cpf').hide();
            $('#rg').hide();
            $('#cnpj').show();
            $('#ie').show();
          }
        });
      });
    </script>

<script>
    $(document).ready(function(){
      // Função para formatar o CEP (acrescenta o hífen)
      function formatarCEP(cep) {
        return cep.replace(/^(\d{5})(\d{3})$/, "$1-$2");
      }

      // Função para preencher os campos com os dados do CEP
      function preencherCampos(endereco) {
        $("#rua").val(endereco.logradouro);
        $("#bairro").val(endereco.bairro);
        $("#cidade").val(endereco.localidade);
        $("#estado").val(endereco.uf);
      }

      // Função para realizar a consulta de CEP
      function consultarCEP() {
        // Obtém o CEP digitado pelo usuário
        var cep = $("input[name='cep']").val().replace(/\D/g, '');

        // Verifica se o CEP possui 8 dígitos
        if (cep.length === 8) {
          // Monta a URL da consulta na API do ViaCEP
          var url = "https://viacep.com.br/ws/" + cep + "/json/";

          // Faz a requisição AJAX
          $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function(data) {
              // Preenche os campos com os dados do CEP
              preencherCampos(data);
              console.log(data);
            },
            error: function() {
              alert("Erro ao consultar o CEP. Verifique se o CEP é válido.");
            }
          });
        }
      }

      // Associa a função de consulta ao evento de clique no botão
      $("button#btnConsultar").click(consultarCEP);

      // Associa a função de consulta ao evento de perda de foco no campo de CEP
      $("input[name='cep']").blur(consultarCEP);
    });
  </script>

  </body>

</html>