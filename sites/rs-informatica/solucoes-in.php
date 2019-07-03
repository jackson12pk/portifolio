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
  
    <img src="assets/img/bg-header-produtos.jpg" alt="" class="bg-internas">


    <!-- Nossas Soluções -->
    <section id="solucoes">
      <div id="nossas-solucoes">
        <div class="container text-center">
          <span class="line-blue"></span>
          <header>
            <h1>Nossas <b>Soluções</b></h1>
            <h2>Lorem Ipsum</h2>
          </header>
          <span class="line-gray"></span>

          <div class="row">

            <div class="col-md-4">
              <div class="owl-carousel owl-theme owl-carousel-solucoes-img text-center">

             

                <div class="item item-solucoes" id="item-no-padding">
                  <figure><img src="assets/img/solucoes-img.png" alt="" class="img-responsive"></figure>
                </div>

               

              </div><!-- /.owl-carousel-solucoes-img -->
              
            </div>

            <div class="col-md-8 text-left text-produtos">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eaque quas, eos repudiandae itaque labore harum nulla unde fugit eveniet.</p>
            </div>
          </div><!-- /.row -->

      
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
      $('.owl-carousel-produtos').owlCarousel({
        loop:true,
        center: false,
        autoplay: true,
        margin:30,
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