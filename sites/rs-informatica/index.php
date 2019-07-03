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
    <?php include 'assets/inc/banner.php' ?>

    <!-- Nossos Produtos -->
    <?php include 'assets/inc/nossas-solucoes.php' ?>    

    <!-- Nossas Soluções -->
    <?php include 'assets/inc/nossas-areas.php' ?>    

    <!-- Quem Somos -->
    <?php include 'assets/inc/quem-somos.php' ?>    
    
    <!-- Clientes -->
    <?php include 'assets/inc/clientes.php' ?>

    <!-- Fale Conosco -->

    <!-- Footer -->
    <?php include 'assets/inc/footer.php' ?>

    <!-- Js -->
    <?php include 'assets/inc/js.php' ?>

    <!-- Maps -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAowlWIWsmWiBUN3TPTD5ILAPuwLN8GxPY&amp;sensor=false"></script>
   <script src="assets/js/maps.js"></script>

    <!-- SuperSlides -->
    <script src="assets/plugins/superslides/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    <!-- Owl-Carousel -->
    <script src="assets/plugins/owl-carousel/owl.carousel.min.js" type="text/javascript" charset="utf-8"></script>


    <script>
      $('#slides').superslides({
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
            items:3
          }
        }
      })
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
            items:4
          }
        }
      })
    </script>

    <script>
      $('.owl-carousel-clientes').owlCarousel({
        loop:true,
        center: false,
        autoplay: true,
        margin:25,
        stagePadding:25,
        dots: false,
        navText: [('<'),('>')],
        nav:true,
        responsive:{
          0:{
            items:1,
            nav: false,
            dots: true
          },
          600:{
            items:3,
            nav: false,
            dots: true
          },
          768:{
            items:4
          },
          1000:{
            items:5
          }
        }
      })
    </script>


  </body>
  </html>