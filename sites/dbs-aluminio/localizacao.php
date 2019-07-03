<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Metas -->
  <?php include "assets/inc/metas.php" ?>

  <!-- Head -->
  <?php include "assets/inc/head.php" ?>

  <title>DBS Alumínio</title>

  <!-- Header -->
  <?php include "assets/inc/header.php" ?>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>

      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <header><h2>localização</h2></header>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos atque modi mollitia, sequi, officiis rerum repellat quae fugit dolore tenetur ea perspiciatis illum corporis ratione itaque commodi recusandae, incidunt ullam.
              </p>
            </div><!-- /.col-md-12 -->
          </div><!-- /.row -->
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12 fix-xs">
              <div id="map">
              </div>
            </div>

            <form class="form-group" id="form-localizacao" method="post" action="" >

              <div class="col-md-10 col-sm-10 col-xs-9 fix-xs">
                <input type="text" class="form-control" id="txtEnderecoPartida" name="txtEnderecoPartida" placeholder="Digite aqui seu ponto de partida">
              </div>
              <div class="col-md-2 col-sm-2 col-xs-3 fix-xs">
                <input id="btnEnviar" value="Traçar Rota" name="btnEnviar" type="submit" class="btn btn-block"/>
              </div>
            </form>

          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>

      <!-- Footer -->
      <?php include "assets/inc/footer.php" ?>

      <!-- Js -->
      <?php include "assets/inc/js.php" ?>
      
      <!-- Maps -->
      <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAowlWIWsmWiBUN3TPTD5ILAPuwLN8GxPY&amp;sensor=false"></script> 
      <script src="assets/js/maps.js"></script>
      

    </body>
    </html>