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
  </head>

  <?php
  #chama o arquivo de configuração com o banco
  require 'conn.php';
  #seleciona os dados da tabela

  $query = mysqli_query($link, "SELECT * FROM vol ORDER BY nomevoluntario ASC");

  $total = mysqli_num_rows($query);
  ?>

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
        <img src="static/img/voluntarios.webp" class="rounded" alt="..." height="210vh" width="350vh">
        </div>
    <!--fim imagem-->

    <div class="cadastro"><br><br>
        <center><h4>VOLUNTÁRIOS CADASTRADOS</h4><br>
         
        </center>             
    </div>

    <div id="consulta">
        <?php 
            if($total > 0){
                while($linha = mysqli_fetch_assoc($query)) {
                    /*Escreve cada linha da tabela*/
                    echo "<b>Código: </b>" . $linha['codigo'] ."<br><b> Nome do voluntário: </b>" . $linha['nomevoluntario'] . "<b><br>Cidade: </b>" . $linha['cidadevoluntario'] .
                    "<br><b> E-mail: </b> ". $linha['emailvoluntario']. "<br><br>
                    
                    
                    <hr><br>";
                    
                }/*Fim do while*/
                
            }/*Fim do if*/
            else{
                echo "<label class='label'>Não existe voluntários cadastrados no momento!</label>";
            }
            
            
        ?>
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