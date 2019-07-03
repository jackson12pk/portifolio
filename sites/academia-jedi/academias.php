<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- Head -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  
  <?php include "assets/inc/head.php" ?>
  <title>Conheça Nossos Cursos | Academia Jedi</title>
 
</head>
<body>
  <!-- Preload -->
  <?php include "assets/inc/preload.php" ?>

  <!-- Navbar -->
  <?php include "assets/inc/navbar.php" ?>

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.default.min.css">

  <div class="wrapper overflow wrapper-interna">
    <div class="container">
      <div class="col-md-1  titulo-internas hidden-xs">
        <header><h1>Academias</h1></header>
      </div>
      <div class="col-md-3 col-left mg-mob col-md-offset-1">
       <a href="academia-frontend">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/front.png" alt="curso de front end na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">Front End</div>
          <div class="desc-curso">Todo mestre Jedi precisa dar o primeiro passo, nesse curso vamos introduzir você no mundo do HTML, CSS e JavaScript.</div>
        </div><!-- /.curso -->
      </a> 

      <a href="academia-excel">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/excel.png" alt="curso de excel na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">Excel</div>
          <div class="desc-curso">Domine todas as fórmulas e cálculos do Excel e esteja pronto para superar os desafios do mercado.</div>
        </div><!-- /.curso -->
      </a> 

      
    </div><!-- /.col-left -->

    <div class="col-md-3 col-mid mg-mob">
      <a href="academia-android">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/android.png" alt="curso de android na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">Android com Kotlin</div>
          <div class="desc-curso">Domine o Kotlin, a nova linguagem de programação do Android e esteja pronto para se tornar um Mestre Jedi no desenvolvimento de apps.</div>
        </div><!-- /.curso -->
      </a> 


      <a href="academia-xamarin">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/xamarin.png" alt="curso de xamarin na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">xamarin</div>
          <div class="desc-curso">Desenvolva apps para Android e iOS com a poderosa tecnologia da Microsoft.</div>
        </div><!-- /.curso -->
      </a> 



    </div><!-- /.col-mid -->

    <div class="col-md-3 col-right mg-mob">
      <a href="academia-logica">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/logica.png" alt="curso de lógica de programação na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">Lógica de Programação</div>
          <div class="desc-curso">Aprender a programar pode abrir vários horizontes e oportunidades de crescimento. Aprenda do zero a dominar a linguagem dos computadores.</div>
        </div><!-- /.curso -->
      </a> 

      <a href="academia-ccna">
        <div class="curso">
          <div class="img-curso"><figure><img src="assets/img/ccna.png" alt="perparatório para certificação CCNA na academia jedi" class="img-responsive"></figure></div>
          <div class="titulo-curso">Certificação CCNA</div>
          <div class="desc-curso">Preparatório completo para certificação CCNA 200-125 com material impresso incluso.</div>
        </div><!-- /.curso -->
      </a> 

       

    </div><!-- /.col-right -->

  </div><!-- /.container -->




</div><!-- /.wrapper -->

<!-- Js -->
<?php include "assets/inc/js.php" ?>

<!-- Owl Carousel Js -->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<script>
  $('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    autoHeight:true,
    loop:true,
    margin: 30,
    nav: false,
    items: 1
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
        items : 5
      }
    }
  })

     // Written by @labnol 
   </script>
 </body>
 </html>