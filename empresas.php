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
    <link href="static/css/navbar-top.css" type="text/css" rel="stylesheet" />

    <script type="text/javascript" charset="utf-8">
        const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
        }

        const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g,'')
        value = value.replace(/(\d{2})(\d)/,"($1) $2")
        value = value.replace(/(\d)(\d{4})$/,"$1-$2")
        return value
        }
	</script>
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

    <!--imagen-->
        <div class="text-center">
        <img src="static/img/empresa.jpg" class="rounded" alt="..." height="210vh" width="350vh">
        </div>
    <!--fim imagem-->

    <div class="cadastro"><br><br>
        <center><h4>CADASTRO DE VAGAS - EMPRESAS/ENTIDADES</h4><br>

        <br>
        <form method="post" action="cadastroempresa.php">

            <input type="text" required="true" name="nomeempresa" id="nomeempresa"  value="" class="txtarea" placeholder="Nome da empresa" maxlength="60"  /><br /><br />

            <input type="text" required="true" name="cidadeempresa" id="cidadeempresa"  value="" class="txtarea" placeholder="Cidade" maxlength="60"  /><br /><br />

            <input type="tel" maxlength="30" onkeyup="handlePhone(event)" required="true" name="telefoneempresa" id="telefoneempresa" class="txtarea" placeholder="Telefone" /><br /><br />

            <input type="text" required="true" name="emailempresa" id="emailempresa"  value="" class="txtarea" placeholder="E-mail" maxlength="60"  /><br /><br />

            <textarea cols="30" rows="5" required="true" name="descricao" id="descricao"  value="" class="descricao" placeholder="Descrição da vaga"></textarea><br /><br />

            <input type="reset" class="input"  name="limpar" id="limpar" value="LIMPAR">
            <input type="submit" class="input" id="send_message" value="CADASTRAR" />
        
        </form>   
        </center>             
    </div>


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