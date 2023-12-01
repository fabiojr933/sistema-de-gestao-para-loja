<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="<?php echo URL_BASE ?>home">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>
        <div class="sb-sidenav-menu-heading">Interface</div>
        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Cadastro
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "cliente/index" ?>">Cliente</a>
            <a class="nav-link" href="<?php echo URL_BASE . "fornecedor/index" ?>">Fornecedor</a>
            <a class="nav-link" href="<?php echo URL_BASE . "categoria/index" ?>">Categoria</a>
            <a class="nav-link" href="<?php echo URL_BASE . "marca/index" ?>">Marca</a>
            <a class="nav-link" href="<?php echo URL_BASE . "unidade/index" ?>">Tipo de Unidade</a>
            <a class="nav-link" href="<?php echo URL_BASE . "fluxo/index" ?>">Fluxo financeiro</a>
          </nav>
        </div>


        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Estoque
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">Produto</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">Ajuste estoque</a>
          </nav>
        </div>


        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Financeiro
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">Lançamento</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">Contas a receber</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">Contas a pagar</a>
          </nav>
        </div>
        <a class="nav-link" href="<?php echo URL_BASE . "" ?>">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          PDV
        </a>


        <div class="sb-sidenav-menu-heading">Relatorios</div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Grafico
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">1</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">2</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">3</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">4</a>
          </nav>
        </div>

        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
          <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
          Relatorios
          <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        </a>
        <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
          <nav class="sb-sidenav-menu-nested nav">
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">1</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">1</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">1</a>
            <a class="nav-link" href="<?php echo URL_BASE . "" ?>">1</a>
          </nav>
        </div>

      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Desenvolvido por:</div>
      Fabio Pereira
    </div>
  </nav>
</div>