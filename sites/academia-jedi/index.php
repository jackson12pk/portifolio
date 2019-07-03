<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Centro de Treinamento em Tecnologia | Academia Jedi</title>
  <meta name="description" content="A Academia Jedi é uma escola de tecnologia com uma metodologia focada no desenvolvimento e capacitação prática dos alunos.">
  <meta name="keywords" content="porto digital, android, unibratec, tecnologia, front end, startup, curso de programação, curso de android, como aprender a programar, aprdender programação, programação mobile, programação web, java, php, python, kotlin"> 
  <meta name="author" content="Academia Jedi"> 
  <meta name="language" content="pt-br">
  <meta property="og:title" content="Centro de Treinamento em Tecnologia | Academia Jedi">
  <meta property="og:description" content="A Academia Jedi é uma escola de tecnologia com uma metodologia focada no desenvolvimento e capacitação prática dos alunos.">
  <meta property="og:url" content="http://www.academiajedi.com.br">
  <meta property="og:site_name" content="Academia Jedi">
  <meta property='og:image' content='http://academiajedi.com.br/assets/img/brand/academia-jedi.png'>
  <meta property="og:type" content="website">
</head>
<body>
  <!-- Preload -->
  <?php //include "assets/inc/preload.php" ?>

  <!-- Navbar -->
  <?php include "assets/inc/navbar.php" ?>

  <!-- Superslides & Owl Carousel -->
  <link rel="stylesheet" type="text/css" href="assets/plugins/superslides/superslides.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.min.css">

  <div class="wrapper overflow">

    <div class="content-slider">
      <!-- <img src="assets/img/banner.png" alt=""> -->
      <div class="container text-center no-pad">
        <div id="slides">
          <ul class="slides-container">

            <li>
              <img src="assets/img/banner.png" alt="">
              <div class="container">
                <div class="text-banner">
                  <header><h2>Treinamento Jedi</h2></header>
                  <p class="text-center">Chegou a hora de ser um mestre da programação e dominar todos os segredos dos algoritimos com os cursos da Academia Jedi.</p>
                  <a class="btn btn-default margin" href="academias" role="button">Ver Cursos</a>              
                </div><!-- /.text-banner --> 
              </div>
            </li>

            <li>
              <img src="assets/img/banner2.png" alt="">
              <div class="container">
                <div class="text-banner">
                  <header><h2>Foco no Mercado</h2></header>
                  <p class="text-center">Queremos preparar você para ser um desenvolvedor de uma grande empresa ou conseguir criar seus próprios projetos e empreender no mercado.</p>
                  <a class="btn btn-default margin" href="academias" role="button">Ver Cursos</a>          
                </div><!-- /.text-banner -->
              </div>
            </li>

          </ul><!-- /.slides-container -->
        </div><!-- /#slides -->
      </div><!-- /.container -->
    </div><!-- /.container-slider -->

    <div class="container marcas-parceiros">
      <div class="owl-carousel-parceiros text-center">
        <div class="item">
          <a href="http://recifesites.com" target="_blanl"><img src="assets/img/recife-sites.png" alt="Recife Sites"></a>
        </div>
        <div class="item">
          <a href="http://nubohost.com.br" target="_blanl"><img src="assets/img/nubohost.png" alt="Nubo Host"></a>
        </div>
        <div class="item">
          <a href="http://brasil.campus-party.org/" target="_blanl"><img src="assets/img/campus-party.png" alt="Campus Party"></a>
        </div>
        <div class="item">
          <a href="https://www.casadocodigo.com.br/" target="_blanl"><img src="assets/img/casa-do-codigo.png" alt="Casa do Código"></a>
        </div>
        
      </div><!-- /.owl-carousel-parceiros -->
    </div><!-- /.container .marcas-parceiros -->

  </div><!-- /.wrapper -->

  <!-- Js -->
  <?php include "assets/inc/js.php" ?>

  <!-- Superslides JS & Owl Carousel Js -->
  <script src="assets/plugins/superslides/jquery.superslides.min.js"></script>
  <script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

  <script>
    $(function() {
      $('#slides').superslides({
        play: 5000,
        animation: 'fade',
        inherit_width_from:' #slides'
      });

      $('.owl-carousel-parceiros').owlCarousel({
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        autoHeight:true,
        loop:true,
        margin: 30,
        nav: false,
        dots: false,
        items: 2,
        responsive : {
          0 : {
            items : 1
          },
          420 : {
            items : 2
          },
          678 : {
            items : 3
          },
          768 : {
            items : 4
          },
          1199 : {
            items : 4
          }
        }
      })
    })

     // Written by @labnol 
   </script>
 </body>
 </html>