<!doctype html>
<html lang="en">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Sistema de cadastro - Voluntários por amor</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert2@7.12.15/dist/sweetalert2.all.js"></script>
  </head>

  <nav class="navbar navbar-expand-lg bg-light fw-semibold">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sistema de cadastros - Voluntários por amor</font></font></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Alternar de navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Home</font></font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="vagas.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vagas</font></font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="voluntarioscadastrados.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voluntários cadastrados</font></font></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
              Cadastros
            </font></font></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="voluntarios.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voluntários</font></font></a></li>
              <li><a class="dropdown-item" href="empresas.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Instituições / Empresas</font></font></a></li>
          </ul>
          <li class="nav-item">
            <a class="nav-link" href="link.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Links</font></font></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobre.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre</font></font></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- acessibilidade-->
    <!-- Example Code -->
    <script type="text/javascript">
      swal(
        'Seja bem-vindo ao site',
        'Sistema de cadastros - Voluntários por amor',
        'success')
    </script>
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
      <div vw-plugin-wrapper>
        <div class="vw-plugin-top-wrapper"></div>
      </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
      new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
  

    <!--fim acessibilidade-->
    <!-- End Example Code -->
    <!--imagen-->
    <div class="text-center">
  </div>

    <!--fim imagem-->
    <main class="container">
    <div class="bg-light p-5 rounded mt-3">
      <h1>CADASTRO DE VOLUNTÁRIOS</h1>
      <p class="lead">Faça aqui o seu cadastro para prestar serviços voluntários.</p>
      <a class="btn btn-lg btn-primary" href="voluntarios.php" role="button">Cadastrar &raquo;</a>
    </div>
  </main>
  <!---->
  <!--imagen-->
  <div class="text-center">
</div>
  <!--fim imagem-->
  <main class="container">
  <div class="bg-light p-5 rounded mt-3">
    <h1>CADASTRO PARA EMPRESAS/ENTIDADES (VAGAS)</h1>
    <p class="lead"> Cadastre aqui as vagas para serviços disponíveis em sua empresa/entidade para os voluntários consultarem e entrarem em contato.</p>
    <a class="btn btn-lg btn-primary" href="empresas.php" role="button">Cadastrar &raquo;</a>
  </div>
</main>
<!---->
<!--imagen-->
<br>
<!--fim imagem-->
<main class="container">
<div class="bg-light p-5 rounded mt-3">
  <h1>INFORMAÇÕES</h1>
  <p class="lead">Confira informações sobre o trabalho voluntário no Brasil e no Mundo.</p>
  <a class="btn btn-lg btn-primary" href="link.html" role="button">Saiba mais &raquo;</a>
</div>
</main>
<!---->
      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


      <div class="b-example-divider"></div>

      <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; Estudante de Engenharia de Computação Polo de Lucélia-SP</span>
      </div>

      <div class="text-center">
      <img src="static/img/logo_univesp.svg" class="rounded" alt="..." height="250vh" width="250vh" text-align="center">
      </div>
  </footer>
</div>
    
</body>
</html>

   