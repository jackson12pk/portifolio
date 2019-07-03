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
        <header><h1>Nossa <b>parceria</b></h1></header>
        <h2>A Intelidata</h2>
        <span class="line-gray"></span>
        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, hic, quam et eius dignissimos nisi dolorum atque veritatis praesentium officia modi alias, quos, iste voluptate quisquam quasi. Recusandae ipsam veniam, dignissimos obcaecati impedit facilis voluptatibus consequuntur at id explicabo nihil magnam vel dolorum cumque minus officiis illo architecto dolor voluptates, placeat aut ex quasi quos. Quasi odit nisi aspernatur, impedit! Eveniet recusandae natus ipsum placeat similique ad beatae aspernatur assumenda ipsa magni, dolorum quia hic optio, odio illo ut, sit.</p>

      </div><!-- /.container -->
    </div>
    <!-- /Banner -->

    <section id="apresentacao-intelidata">

      <div class="wrapper">
        <div class="container">
          <span class="line-blue"></span>
          <header>
            <h1>veja nossos <b>produtos</b></h1>
          </header>

          <div class="owl-carousel owl-theme owl-carousel-produtos">

            <div class="item">
              <div class="produtos">
                <img src="assets/img/solucoes-img.png" alt="" class="img-responsive img-circle" >
                <div class="content-produtos">
                  <figure><img src="assets/img/produtos-marca2.png" alt="" class="icon-produtos"></figure>
                </div>
              </div>
            </div>

          </div><!-- /.owl-carousel-produtos -->
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
      $('.owl-carousel-produtos').owlCarousel({
        autoplay: true,
        loop:true,
        center: false,
        margin:50,
        nav:false,
        dots: true,
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