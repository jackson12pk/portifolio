<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <!-- Head -->
  <!-- Superslides -->
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">

  <?php include 'assets/inc/head.php' ?>

  <title>RS Informática</title>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Header -->
    <?php include 'assets/inc/header.php' ?>
    <img src="assets/img/bg-header-localizacao.jpg" alt="" class="bg-internas">


    <!-- Nossas Soluções -->
    <section id="solucoes">
      <div id="nossas-solucoes">
        <div class="container text-center">
          <span class="line-blue"></span>
          <header>
            <h1><b>localização</b></h1>
            <h2>Veja no mapa abaixo a nossa localização na cidade de Paudalho, localização estratégica para atender toda o estado de Pernambuco e estados vizinhos. Abaixo do formulário, digite o seu endereço e veja a melhor rota para nos visitar.</h2>
          </header>
          <span class="line-gray" id="line-map"></span>
        </div>
        <div class="container-fluid no-margin text-center">
          <div id="mapa"></div>

          <form class="form-group " id="form-localizacao" method="post" action="" >

              <div class="style-form">
                <input type="text" class="localizacao-input" id="txtEnderecoPartida" name="txtEnderecoPartida" placeholder="Digite seu ponto de partida">
                <input id="btnEnviar" value="Traçar Rota" name="btnEnviar" type="submit" class="btn btn-block"/>
              </div>
            </form>

        </div><!-- /.container-fluid -->
      </div><!-- /#nossas-solucoes -->
    </section><!-- /Nossas Soluções -->

    <!-- Footer -->
    <?php include 'assets/inc/footer.php' ?>

    <!-- Js -->
    <?php include 'assets/inc/js.php' ?>

    <!-- Maps -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAowlWIWsmWiBUN3TPTD5ILAPuwLN8GxPY&amp;sensor=false"></script>
    <script src="assets/js/maps.js"></script>


  </body>
  </html>