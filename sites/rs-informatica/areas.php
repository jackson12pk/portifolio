<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <!-- Head -->
  <!-- Superslides -->
  <link rel="stylesheet" href="assets/plugins/superslides/superslides.css">

  <!-- Owl-Carousel -->
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.css">

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
    <img src="assets/img/bg-header.jpg" alt="" class="bg-internas">


    <!-- Nossas Soluções -->
    <section id="solucoes">
      <div id="nossas-solucoes">
        <div class="container text-center">
          <span class="line-blue"></span>
          <header>
            <h1>Nossas <b>áreas de atuação</b></h1>
            <h2>Disponibilizamos soluções que se encaixam perfeitamente em empresas de vários segmentos de mercado. Veja abaixo os áreas que nossas soluções podem atender de forma perfeita.</h2>
          </header>

          

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/2.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/1.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/4.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/3.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>
          
          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/4.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/3.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/2.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>      

          <div class="col-md-3 item item-solucoes">
            <img src="assets/img/icon/1.png" style="max-width: 85px; margin: auto;">
            <h3>Lorem ipsum</h3>
            <span class="line-blue-sm"></span>
          </div>
          
        </div><!-- /.container -->
      </div><!-- /#nossas-solucoes -->
    </section><!-- /Nossas Soluções -->

    <!-- Footer -->
    <?php include 'assets/inc/footer.php' ?>

    <!-- Js -->
    <?php include 'assets/inc/js.php' ?>

    <!-- SuperSlides -->
    <script src="assets/plugins/superslides/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    <!-- Owl-Carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript" charset="utf-8"></script>


    <script>
      $('.owl-carousel-solucoes').owlCarousel({
        loop:true,
        center: false,
        autoplay: true,
        margin:15,
        dots: true,
        nav:false,
        responsive:{
          0:{
            items:1
          },

          1000:{
            items:4
          }
        }
      })
    </script>

  </body>
  </html>