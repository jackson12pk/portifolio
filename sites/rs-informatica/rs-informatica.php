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
   

    <!-- Banner -->
    <div class="banner-internas">
      <div class="container text-center">
        <span class="line-white"></span>
        <header><h1>Quem <b>Somos</b></h1></header>
        <h2>A RS informática</h2>
        <span class="line-gray"></span>
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae iusto odio impedit magnam ipsum ut earum, quis a veritatis facere. Ullam unde modi quidem voluptate eos, quibusdam similique porro quae dolores ipsa distinctio incidunt est enim optio laboriosam maiores non itaque praesentium hic nam consequuntur a iste quas. Possimus, facere eum. Veniam numquam soluta incidunt, cum adipisci iusto illum ad cumque ipsam at! Maxime maiores repudiandae perspiciatis ipsum ea error tenetur cumque temporibus voluptatibus illo atque eaque eius autem aliquam voluptas voluptate quo, ratione asperiores saepe ipsam corrupti, culpa earum placeat. Harum beatae, facere delectus minima minus perspiciatis totam laboriosam.</p>

        <div class="missao-visao-valores">
          <div class="col-md-4 missao">
            <h3>Missão</h3>
            <img src="assets/img/dot.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ex reiciendis, modi quos laborum aliquam autem quia soluta molestiae ullam!</p>
          </div>

          <div class="col-md-4 visao">
            <h3> visão</h3>
            <img src="assets/img/eye.png" alt="">
            <p style="padding-top: 10px;" class="hidden-xs hidden-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero labore fuga numquam incidunt unde voluptates mollitia sit dolores possimus dolorum.</p>
          </div>

          <div class="col-md-4 valores">
            <h3> valores</h3>
            <img src="assets/img/medal.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto aspernatur odit sint dolore. Magnam consequuntur perferendis expedita? Quidem, inventore, officiis.</p>
          </div>
        </div><!-- /.missao-visao-valores -->
      </div><!-- /.container -->
    </div>
    <!-- /Banner -->

    <section id="apresentacao-rs">

      <div class="wrapper">
        <div class="container">
          <span class="line-blue"></span>
          <header>
            <h1>Algumas <b>áreas de atuação</b></h1>
          </header>

          <div class="owl-carousel owl-theme owl-carousel-solucoes text-center">

            <div class="item item-solucoes">
              <!--i class="flaticon-dress"></i-->
              <img src="assets/img/icon/2.png" style="max-width: 85px; margin: auto;">
              <h3>Lorem ipsum</h3>
            </div>
          
            <div class="item item-solucoes">
              <!--i class="flaticon-dress"></i-->
              <img src="assets/img/icon/1.png" style="max-width: 85px; margin: auto;">
              <h3>Lorem ipsum</h3>
            </div>
          
            <div class="item item-solucoes">
              <!--i class="flaticon-dress"></i-->
              <img src="assets/img/icon/4.png" style="max-width: 85px; margin: auto;">
              <h3>Lorem ipsum</h3>
            </div>
          
            <div class="item item-solucoes">
              <!--i class="flaticon-dress"></i-->
              <img src="assets/img/icon/3.png" style="max-width: 85px; margin: auto;">
              <h3>Lorem ipsum</h3>
            </div>
          
            <div class="item item-solucoes">
              <!--i class="flaticon-dress"></i-->
              <img src="assets/img/icon/2.png" style="max-width: 85px; margin: auto;">
              <h3>Lorem ipsum</h3>
            </div>
          
          </div><!-- /.owl-carousel-solucoes -->
        </div><!-- /.container -->

      </div><!-- /.wrapper -->
    </section>

    <!-- Footer -->
    <?php include 'assets/inc/footer.php' ?>

    <!-- Js -->
    <?php include 'assets/inc/js.php' ?>

    <!-- SuperSlides -->
    <script src="assets/plugins/superslides/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    <!-- Owl-Carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript" charset="utf-8"></script>


    <script>
      $('#slides2').superslides({
        play: 5000,
        animation: 'fade',
        inherit_height_from: '#slides'

      });
    </script>

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

  </body>
  </html>