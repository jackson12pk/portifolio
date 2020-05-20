<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <!-- Metas -->
  <?php include 'assets/inc/metas.php' ?>

  <title>Jackson Pereira - Desenvolvedor Web</title>

  <!-- Page Css -->
  <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css"> 

  <!-- Favicon -->
  <?php include 'assets/inc/favicon.php' ?>

  <!-- Head -->
  <?php include 'assets/inc/head.php' ?>

</head>
<body>

 <!-- Preload -->
 <?php include "assets/inc/preload.php" ?>

 <!-- Header -->
 <?php include 'assets/inc/header.php' ?>
 
 <section id="sobre">
  <div class="wrapper text-center">
   <div class="container">
     <header><h1>Sobre</h1></header>
     <div class="col-md-10 col-md-offset-1">
     <div class="jumbotron foo-1">
       <p>Olá, Sejam Bem-vindos!</p>


       <div class="skills">
        <h2>Me chamo Jackson Pereira, tenho 25 anos, sou formado em Sistemas de Informação pela Faculdade Joaquim Nabuco e atualmente trabalho como <b>Desenvolvedor Web</b>, aqui estão algumas de minhas <b>Habilidades:</b></h2>
        <ul>
         <li>• HTML</li>
         <li>• CSS</li>
         <li>• JQuery</li>
         <li>• Javascript</li>
         <li>• Bootstrap</li>
         <li>• PHP</li>
         <li>• Git (Bitbucket/Github)</li>
         <li>• MySQL</li>
         <li>• Wordpress</li>
         <li>• Sites Responsivos</li>
       </ul>
     </div>

   </div><!-- /.jumbotron -->
   </div><!-- /.col-md-10 -->

 </div><!-- /.container -->
</div><!-- /.wrapper -->
</section>

<section id="portifolio">
  <div class="wrapper text-center">
   <header><h1>Portfólio</h1></header>

   <div class="container">

    <div class="owl-carousel owl-carousel-portifolio foo-2">

      <div class="item col-md-12">
        <h2>Sérgio Cosmo Advogado</h2>
        <a href="sites/sergio-cosmo-advogado" target="_blank">
          <figure><img src="assets/img/site00.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/sergio-cosmo-advogado" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>Academia Jedi</h2>
        <a href="sites/academia-jedi" target="_blank">
          <figure><img src="assets/img/site01.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/academia-jedi" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>Casa das pipas</h2>
        <a href="sites/casa-das-pipas/" target="_blank">
          <figure><img src="assets/img/site02.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/casa-das-pipas/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>Construção Livre(Site)</h2>
        <a href="sites/construcao-livre/" target="_blank">
          <figure><img src="assets/img/site03.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/construcao-livre/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>DBS Alumínio</h2>
        <a href="sites/dbs-aluminio/" target="_blank">
          <figure><img src="assets/img/site04.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/dbs-aluminio/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>Empresarial Alexandre de Castro e Silva</h2>
        <a href="sites/empresarial-alexandre/" target="_blank">
          <figure><img src="assets/img/site05.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/empresarial-alexandre/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>Home Market(Site)</h2>
        <a href="sites/home-market-site/" target="_blank">
          <figure><img src="assets/img/site06.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/home-market-site/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

      <div class="item col-md-12">
        <h2>RS Informática</h2>
        <a href="sites/rs-informatica/" target="_blank">
          <figure><img src="assets/img/site07.png" alt="" class="img-responsive"></figure>
        </a>
        <a href="sites/rs-informatica/" target="_blank" class="btn-mais">Visualizar</a>
      </div>

    </div><!-- /.owl-carousel -->
  </div><!-- /.container -->
</div>
</section>

<!-- Footer -->
<?php include 'assets/inc/footer.php' ?>

<!-- Page Js -->
<?php include 'assets/inc/js.php' ?>

<!-- Owl-Carousel -->
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- Scroll-Reveal -->
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<!-- Scroll -->
<script src="assets/js/scroll.js"></script>

<!-- Load -->
<script src="assets/js/load.js"></script>

<script>
  window.sr = ScrollReveal({ reset: true });

  sr.reveal('.foo-1', { duration: 700, reset:true, delay:300 });
  sr.reveal('.foo-2', { duration: 700, reset:true, delay:450 });
  sr.reveal('.foo-3', { duration: 700, reset:true, delay:650 });
  sr.reveal('.foo-4', { duration: 700, reset:true, delay:850 });
  sr.reveal('.foo-5', { duration: 700, reset:true, delay:1050 });

</script>
<script>

  $('.owl-carousel-portifolio').owlCarousel({
    autoplay: true,
    loop: true,
    center: false,
    margin: 30,
    nav:true,
    dots: true,
    responsive:{
      0:{
        items:1
      },
      1000:{
        items:2
      }
    }
  })
</script>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      nav:true,
    })
    $( ".owl-prev").html('<i class="fas fa-chevron-left fa-2x"></i>');
    $( ".owl-next").html('<i class="fas fa-chevron-right fa-2x"></i>');
  }); 
</script>

</body>
</html>