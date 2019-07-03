<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Casa das Pipas</title>

  <!-- Favicon -->
  <?php include 'assets/inc/favicon.php' ?>

  <!-- Page Css -->
  <?php include 'assets/inc/head.php' ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">
  

</head>
<body>

  <!-- Header -->
  <?php include 'assets/inc/header.php' ?>

  <div id="slides">
    <ul class="slides-container">

      <li>
        <img src="assets/img/banner/1'.jpg" alt="">
        <div class="container">
          Para brincar ou para revender, pipas e acessórios são aqui.
        </div>
      </li>
      
      <li>
        <img src="assets/img/banner/localizacao.jpg" alt="">
        <div class="container">
          Uma casa especializada em pipas com fácil localização, no centro do Recife.
        </div>
      </li>

      <li>
        <img src="assets/img/banner/2.jpg" alt="">
        <div class="container">
          Na Casa das Pipas não tem tempo ruim, brincar e se divertir pode ser toda hora!.
        </div>
      </li>

      <li>
        <img src="assets/img/banner/3.jpg" alt="">
        <div class="container">
          A maior variedade, os melhores produtos e os menores preços do Nordeste.
        </div>
      </li>
    </ul><!-- /.slides-container -->
  </div><!-- /#slides -->

  <section class="produtos">
    <div class="container content-produtos no-pad fix-pad">
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <ul class="simplefilter bold uppercase">
          </ul><!-- /.simplefilter -->
        </div>
      </div><!-- /.row -->

      <div class="filtr-container">  

        <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" 
        id="foo-<?=$pro_id?>" data-category="<?=$pro_categoria_id?>">
        <div class="item transitions">
          <figure><img src="assets/img/pipa.png" alt="" class="img-responsive"></figure>
          <div class="desc-item">
            <p>Pipa</p>
            <p class="preco-produto">R$ 9,99</p>
            <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
          </div>
        </div>
      </div><!-- /.item -->

      <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" 
        id="foo-<?=$pro_id?>" data-category="<?=$pro_categoria_id?>">
        <div class="item transitions">
          <figure><img src="assets/img/forma.png" alt="" class="img-responsive"></figure>
          <div class="desc-item">
            <p>Forma</p>
            <p class="preco-produto">R$ 9,99</p>
            <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
          </div>
        </div>
      </div><!-- /.item -->

      <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" 
        id="foo-<?=$pro_id?>" data-category="<?=$pro_categoria_id?>">
        <div class="item transitions">
          <figure><img src="assets/img/linha.png" alt="" class="img-responsive"></figure>
          <div class="desc-item">
            <p>Linha</p>
            <p class="preco-produto">R$ 9,99</p>
            <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
          </div>
        </div>
      </div><!-- /.item -->  

      <div  class="col-md-3 col-sm-6 col-xs-12 text-center filtr-item no-pad fix-pad" 
        id="foo-<?=$pro_id?>" data-category="<?=$pro_categoria_id?>">
        <div class="item transitions">
          <figure><img src="assets/img/carretilha.png" alt="" class="img-responsive"></figure>
          <div class="desc-item">
            <p>Carretilha</p>
            <p class="preco-produto">R$ 9,99</p>
            <div class="sim-button button-red"><a href="produtos.php">detalhes</a></div>
          </div>
        </div>
      </div><!-- /.item -->
    </div>
  </div><!-- /.filtr-container -->
</div><!-- /.container -->

<div class="button-mais text-center">
  <a href="produtos.php"><figure><img src="assets/img/button-mais.png" alt=""></figure>
  mais</a>
</div><!-- /.button-mais -->
</section><!-- /.produtos -->

<section class="contato-home">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <header class="contato-title">
          <h1><img src="assets/img/contato-title.png" alt=""> fale conosco</h1>
        </header>
        <div class="row">

          <div class="contato-form">
            <form action="contConfirma.php" method="POST" class="">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="nome" name="nome" type="text" class="form-control transitions" placeholder="Nome" required>
                  <input id="home" name="home" type="hidden" value="1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="telefone" name="telefone" type="text" class="form-control transitions" id="telefone" placeholder="Telefone" maxlength="15" minlength="14" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="email" name="email" type="email" class="form-control transitions" placeholder="E-mail" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="msg" name="msg" type="text" class="form-control transitions" rows="5" placeholder="Mensagem" required></textarea>
                </div>
              </div>
              <div class="col-md-12 text-left">
                <input type="submit" value="enviar" class="btn-enviar transitions">
              </div>
            </form>
          </div><!-- /.contato-form -->
        </div>
      </div>

      <div class="col-md-6 text-right">
        <header class="casa-title"><h1>a nossa casa <img src="assets/img/casa-title.png" alt=""></h1></header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, ea laboriosam vitae ipsum dolorum quaerat sequi harum molestiae veritatis, fugit minus? Autem error sint consectetur at optio, labore enim ullam dignissimos veritatis est saepe qui quo aspernatur nostrum quod, dolores voluptas totam et distinctio reprehenderit tempora officiis! Illum, quisquam, similique!</p>
        <a href="casa.php" class="btn-saiba-mais">saiba mais</a>
      </div>

    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</section>


<!-- Maps -->
<div id="map" class="map-home"></div>

<!-- Footer -->
<?php include 'assets/inc/footer.php' ?>

<!-- Page Js -->
<?php include 'assets/inc/js.php' ?>

<script src="assets/plugins/superslides/jquery.superslides.min.js"></script>

<!-- Filterizr -->
<script src="assets/plugins/filterizr/jquery.filterizr.min.js"></script>
<script src="assets/js/controls.js"></script>

<!-- Maps -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAljsgH0oEvPeQ-TVAUXKmqapNQPl-a42s&amp;"></script>
<script src="assets/js/maps.js"></script>

<script src="assets/js/mask.js"></script>

<!-- Filterizr -->
<script type="text/javascript">
  $(window).on('load', function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
          });
        </script>

        <script>
          $(document).ready(function(){
            $('#slides').superslides({
              play:5000,
              animation:'fade',
              inherit_height_from:'#slides',
            });
          });

        </script>
      </body>
      </html>