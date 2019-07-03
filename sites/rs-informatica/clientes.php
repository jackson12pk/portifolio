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
    <img src="assets/img/bg-header-contato.jpg" alt="" class="bg-internas">


    <!-- Nossas Soluções -->
    <section id="solucoes">
      <div id="nossas-solucoes">
        <div class="container text-center">
          <span class="line-blue"></span>
          <header>
            <h1>Nossos <b>clientes</b></h1>
            <h2>Veja abaixo as empresas que confiam nas nossas soluções. São mais de 150 clientes espalhados em todo o Nordeste do Brasil de todos os tamanhos e ramos de atuação.</h2>
          </header>
          <span class="line-gray"></span>
        </div>
        <div class="container text-center">
          <div class="row " id="clientes">
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
            <div class="col-md-3"><img src="assets/img/cocacola.png" alt=""></div>
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
            items:5
          }
        }
      })
    </script>
    <script>
      $('.owl-carousel-solucoes-img').owlCarousel({
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
            items:1
          }
        }
      })
    </script>

  </body>
  </html>